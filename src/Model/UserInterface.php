<?php

namespace PHPIITraining\Model;

interface UserInterface
{
    public function getFirstName(): string;
    public function getLastName(): string;
    public function getGender(): string;
    public function getPhoneNumber(): string;

}