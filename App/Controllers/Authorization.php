<?php

namespace App\Controllers;

use App\AccessController;

class Authorization extends AccessController
{

    public function login()
    {
        echo $this->view
            ->display('auth/login.html.twig');
    }

    public function register()
    {
        echo $this->view->display('auth/register.html.twig');
    }

    public function logout()
    {
        echo 'Authorization Controller and method logout';
    }

}