<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 10.05.20
 * Time: 16:17
 */

namespace App\Controllers;


use Core\BaseController;

class Authorization extends BaseController
{

    public function login()
    {
        echo $this->view
            ->display('auth/login.php');
    }

    public function register()
    {
        echo $this->view->display('auth/register.php');
    }

    public function logout()
    {
        echo 'Authorization Controller and method logout';
    }

}