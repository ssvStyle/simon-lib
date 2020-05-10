<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 10.05.20
 * Time: 16:17
 */

namespace App\Controllers\Auth;


use Core\BaseController;

class Authorization extends BaseController
{

    public function login()
    {
        return $this->view
            ->display('auth/login');
    }

    public function register()
    {
        return $this->view->display('auth/register');
    }

    public function logout()
    {
        echo 'Authorization Controller and method logout';
    }

}