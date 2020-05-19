<?php

namespace App\Controllers;

use Core\BaseController;

class Home extends BaseController
{

    public function index()
    {

        echo $this->view
            ->display('index.html.twig');
    }

    public function notFound()
    {

        echo $this->view
            ->display('404.html.twig');
    }


}