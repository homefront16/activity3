<?php


namespace App\Services\Business;


use App\Services\Data\SecurityDAO;
use App\Services\Data\UserDAO;

class SecurityService
{
    public function getAllUsers(){
        $securityDAO = new SecurityDAO();
        return $securityDAO->findAllUsers();
    }
    public function getUserByID(int $id){
        $securityDAO = new SecurityDAO();
        return $securityDAO->findUserByID($id);
    }
}
