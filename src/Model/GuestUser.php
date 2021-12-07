<?php

namespace PHPIITraining\Model;

class GuestUser extends User
{
    protected const typeOfUser = 'Guest';

    public function __construct($firstName, $lastName, $phoneNumber, $gender)
    {
        parent::__construct($firstName, $lastName, $phoneNumber, $gender);
        $this->userType = self::typeOfUser;
    }

    public function displayUsers()
    {

    }
}