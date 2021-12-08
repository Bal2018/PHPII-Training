<?php

namespace PHPIITraining\Factory;

use PHPIITraining\Model\AdminUser;

class UserFactory
{
    public function __construct()
    {}

    public function CreateAdminUser($firstName, $lastName, $phoneNumber, $gender)
    {
        $newAdmin =  new AdminUser($firstName, $lastName, $phoneNumber, $gender);
 //       $newAdmin->firstName = $newAdmin->firstName . $newAdmin->getUserType();
        return $newAdmin;
    }



}