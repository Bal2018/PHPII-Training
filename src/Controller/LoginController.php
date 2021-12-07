<?php

namespace PHPIITraining\Controller;

use PHPIITraining\Model\User;
use PHPIITraining\View\LoginForm;

class LoginController
{
    public function loginActions(): string
    {
        $user = new User();

        $form = new LoginForm();
        $response = $form->render();
        return $response;
    }
}