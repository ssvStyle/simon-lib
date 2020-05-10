<?php

namespace App\Controllers;

use Core\BaseController;

class Home extends BaseController
{

    public function index()
    {

        return $this->view
            ->withParams('id', 5)
            ->display('index');
    }

    public function notFound()
    {

        return $this->view
            ->display('404');
    }


}