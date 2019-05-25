<?php
/**
 * Created by PhpStorm.
 * Business: Aleks Ruci
 * Date: 25.05.2019
 * Time: 17:21
 */

require_once '../db/BusinessDAO.php';
require_once '../model/Business.php';

class BusinessManager
{
    public function getBusinessByID($id)
    {
        $filter = array("id" => $id, "name" => null);
        $businessDao = new BusinessDAO();
        $user = $businessDao->getBusinesses($filter)[0];
        return $user;
    }

    public function getBusinessesByName($name)
    {
        $filter = array("id" => null, "name" => $name);
        $businessDao = new BusinessDAO();
        $users = $businessDao->getBusinesses($filter);
        return $users;
    }

    public function getAllBusinesses()
    {
        $filter = array("id" => null, "name" => null);
        $businessDao = new BusinessDAO();
        $users = $businessDao->getBusinesses($filter);
        return $users;
    }

    public function saveBusiness(Business $business) {
        $businessDao = new BusinessDAO();
        return $businessDao->saveBusiness($business);
    }

    public function updateBusiness(Business $business){
        $businessDao = new BusinessDAO();
        return $businessDao->updateBusiness($business);
    }

    public function deleteBusiness($userId) {
        $businessDao = new BusinessDAO();
        $businessDao->deleteBusiness($userId);
    }
    
    public function getBusinessesByCategoryId($categoryId) {
        $businessDao = new BusinessDAO();
        return $businessDao->getBusinessesByCategoryId($categoryId);
    }
}