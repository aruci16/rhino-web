<?php
/**
 * Created by PhpStorm.
 * User: Aleks Ruci
 * Date: 25.05.2019
 * Time: 17:07
 */

require_once 'DBConnection.php';

class BusinessDAO extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getBusinesses($filter)
    {
        $query = "SELECT business.*  
                 FROM business 
                 WHERE 1 = 1 ";

        if ($filter['id'] != null) {
            $query .=" AND business.ID = " . $this->getRealEscapeString($filter['id']);
        }
        if ($filter['name'] != null) {
            $query .=" AND business.Name = '{$this->getRealEscapeString($filter['name'])}'";
        }

        $result = $this->executeQuery($query);
        $businesses = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $business = new Business($row['ID']);
            $business->setName($row['Name']);
            $business->setAddress($row['Address']);
            $business->setLatitude($row['Latitude']);
            $business->setLongitude($row['Longitude']);

            $businessType = new UserType($row['UserTypeID']);
            $businessType->setName($row['TypeName']);
            $business->setType($businessType);

            $business->setIsActive($row['IsActive']);

            array_push($businesses, $business);
        }
        return $businesses;
    }

    public function saveBusiness(Business $business)
    {
        $query = "INSERT INTO business(Name, Address, Latitude, Longitude) 
            VALUES ('{$this->getRealEscapeString($business->getName())}' 
                  , '".md5($this->getRealEscapeString($business->getAddress()))."' 
                  , '{$this->getRealEscapeString($business->getLatitude())}' 
                  , '{$this->getRealEscapeString($business->getLongitude())}'})";
        $this->executeQuery($query);
        return $this->getGeneratedId();
    }

    public function updateBusiness(Business $business)
    {
        $query = "UPDATE `business` SET 
             `Name` = '{$this->getRealEscapeString($business->getName())}',
             `Address` = '".md5($this->getRealEscapeString($business->getAddress()))."',
             `Latitude` = '{$this->getRealEscapeString($business->getLatitude())}', 
             `Longitude` = '{$this->getRealEscapeString($business->getLongitude())}', 
              WHERE `ID` = {$this->getRealEscapeString($business->getId())}";

        $this->executeQuery($query);
    }

    public function deleteBusiness($id)
    {
        $query = "DELETE FROM business WHERE ID = {$this->getRealEscapeString($id)} ";
        $this->executeQuery($query);
    }
}