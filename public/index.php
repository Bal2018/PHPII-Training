<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPIITraining\Model\AdminUser;
use PHPIITraining\View\LoginForm;

use PHPIITraining\Controller\LoginController;

$controller = new LoginController();
$controller->loginActions();


