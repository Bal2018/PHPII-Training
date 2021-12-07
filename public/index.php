<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPIITraining\View\LoginForm;

use PHPIITraining\Controller\LoginController;

echo LoginForm::render();

//
//$controller = new LoginController();
//$user = $controller->loginActions();
