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
        echo 'Authorization Controller and method login';
    }

    public function registration()
    {
        echo 'Authorization Controller and method registration';
    }

    public function logout()
    {
        echo 'Authorization Controller and method logout';
    }

}