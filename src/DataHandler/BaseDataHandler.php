<?php


namespace PHPIITraining\DataHandler;


use Exception;
use PDO;
use PDOException;

class BaseDataHandler
{
    protected PDO $pdo;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost; dbname=phpcourse', 'vagrant', 'vagrant');

        }
        catch (PDOException $e) {
            $logEntry = time(). "|".$e->getMessage().PHP_EOL;
        }
    }
    public function dbConnections(array $config)
    {

    }

}