<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPIITraining\Model\AdminUser;
use PHPIITraining\View\LoginForm;

use PHPIITraining\Controller\LoginController;

echo LoginForm::render();
$aUser = new AdminUser('Fred','Jimbo','098765431','Other');

//$firstName, $lastName, $phoneNumber, $gender)
//
//$controller = new LoginController();
//$user = $controller->loginActions();
