<?php
/**
 * Created by PhpStorm.
 * User: grent
 * Date: 5/25/2019
 * Time: 5:07 PM
 */

class DiscountDAO extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public  function getDiscounts($filter)
    {
        $query = "select discount.ID,discount.Name,discount.Value,discount.StartTime,discount.EndTime,
                  b.ID as BusinessID, b.Name as BusinessName, bc.Name as Category
                  from discount 
                  inner join business_product bp on discount.BusinessProductID = bp.ID
                  inner join business b on bp.BusinessID = b.ID
                  inner join business_tag bt on b.ID = bt.BusinessID
                  inner join business_category bc on bt.BusinessCategoryID = bc.ID
                  where 1=1
                  ";
        if ($filter["BusinessID"] != null) {
            $id = $this->getRealEscapeString($filter["BusinessID"]);
            $query .= " AND b.`ID`= $id";
        }
        if ($filter["BusinessCategoryID"] != null) {
            $bcID = $this->getRealEscapeString($filter["BusinessCategoryID"]);
            $query .= " AND c.`ID`= $bcID";
        }
        $discounts=array();
        $result=$this->executeQuery($query);
        while ($row = mysqli_fetch_assoc($result)) {
            $discount= new Discount($row['ID']);
            $discount->setName($row["Name"]);
            $discount->setValue($row["Value"]);
            $discount->setStartTime($row["StartTime"]);
            $discount->setEndTime($row["EndTime"]);

            $business= new Business($row["BusinessID"]);
            $business->setName($row["BusinessName"]);
            $discount->setBusiness($business);
            $discount->setCategory($row["Category"]);
            array_push($discounts,$discount);

        }
        return $discounts;
    }



}