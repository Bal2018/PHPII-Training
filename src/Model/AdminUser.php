<?php

namespace PHPIITraining\Model;

class AdminUser extends User
{
    protected const typeOfUser = 'Admin';

    public function __construct($firstName, $lastName, $phoneNumber, $gender)
    {
        parent::__construct($firstName, $lastName, $phoneNumber, $gender);
        $this->firstName = parent().self::typeOfUser;
    }

    public function deleteUsers()
    {
        echo "Delete Users";
    }

    public function __get($value)
    {
        return $this->$value;
    }
}