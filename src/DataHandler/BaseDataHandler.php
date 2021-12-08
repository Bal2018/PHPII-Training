<?php


namespace PHPIITraining\DataRepo;


use Exception;
use PDO;
use PDOException;

class BaseDataHandler
{
    protected PDO $pdo;

    /**
     * @throws Exception
     */
    protected function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost; dbname=phpcourse', 'vagrant', 'vagrant');
            $this->pdo->exec('select * from Users');
        }
        catch (PDOException $e) {
            $logEntry = time(). "|".$e->getMessage().PHP_EOL;
        }
    }
}