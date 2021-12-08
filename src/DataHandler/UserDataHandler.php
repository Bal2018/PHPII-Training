<?php

namespace PHPIITraining\DataRepo;

use PDOException;
use PHPIITraining\Model\UserInterface;

class UserDataHandler extends BaseDataHandler
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addUser(UserInterface $UserDetails)
    {
        try {
            $this->pdo->exec('Insert into User (firstName, lastName, phoneNumber, gender) values ()');
        }
        catch (PDOException $e) {
            $logEntry = time(). "|".$e->getMessage().PHP_EOL;
        }

    }


}