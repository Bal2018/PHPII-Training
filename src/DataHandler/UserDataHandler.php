<?php

namespace PHPIITraining\DataHandler;

use PDOException;
use PHPIITraining\Model\UserInterface;

class UserDataHandler extends BaseDataHandler
{
    public function addUser(UserInterface $userDetails)
    {
        try {

            $result = $this->pdo->query('Insert into User (firstName, lastName, phoneNumber, gender) values ()');
//            foreach ($userDetails-> getArrayCopy() as $value)
//                $sql .="'". $value. "'";
//            $sql = substr(($sql,0,-1);
//            $sql .= ');');
            //or ue a pdo function


            //query (exec - is for admin stuff, don't care about the results )
            //in userdetails -- have fn have get array values
        }
        catch (PDOException $e) {
            $logEntry = time(). "|".$e->getMessage().PHP_EOL;
        }
return $result;
    }
// $this->pdo->exec('select * from Users');

}