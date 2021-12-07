<?php

namespace PHPIITraining\Model;

class User implements \UserInterface
{
    public string $firstName;
    public string $lastName;
    public $DateStamp;
    protected int $userID;
    public string $gender;
    public string $phoneNumber;
    public string $userType;

    public function __construct($firstName, $lastName, $phoneNumber, $gender)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->DateStamp= date('d-m-Y');
        $this->gender = $gender;
        $this->phoneNumber = $phoneNumber;
        $this->userType = "";
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
}