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
        $userDao = new BusinessDAO();
        $user = $userDao->getBusinesses($filter)[0];
        return $user;
    }

    public function getBusinessesByName($name)
    {
        $filter = array("id" => null, "name" => $name);
        $userDao = new BusinessDAO();
        $users = $userDao->getBusinesses($filter);
        return $users;
    }

    public function getAllBusinesses()
    {
        $filter = array("id" => null, "name" => null);
        $userDao = new BusinessDAO();
        $users = $userDao->getBusinesses($filter);
        return $users;
    }

    public function saveBusiness(Business $business) {
        $userDao = new BusinessDAO();
        return $userDao->saveBusiness($business);
    }

    public function updateBusiness(Business $business){
        $userDao = new BusinessDAO();
        return $userDao->updateBusiness($business);
    }

    public function deleteBusiness($userId) {
        $userDao = new BusinessDAO();
        $userDao->deleteBusiness($userId);
    }
}