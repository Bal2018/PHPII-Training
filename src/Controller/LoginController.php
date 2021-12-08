<?php

namespace PHPIITraining\Controller;

use PHPIITraining\DataRepo\UserDataHandler;
use PHPIITraining\Factory\UserFactory;
use PHPIITraining\Model\AdminUser;
use PHPIITraining\Model\User;
use PHPIITraining\View\LoginForm;

class LoginController
{

    public function loginActions(): void
    {
 //       if ($_SERVER["REQUEST_METHOD"] == 'GET'){
            LoginForm::render();
 //       }
        if ($_SERVER["REQUEST_METHOD"] == 'POST')
        {
            $aUser = new UserFactory();
            //validation with an if else messages

            $actualUser = $aUser->createAdminUser($_POST['firstName'],$_POST['lastName'],$_POST['phoneNumber'],$_POST['gender']);
            //call fn to add to db
            $userRepo = new UserDataHandler();
            $userRepo->addUser($actualUser);
            var_dump($actualUser);

        }
    }

}