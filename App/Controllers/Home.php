<?php

namespace App\Controllers;

use App\AccessController;

class Home extends AccessController
{

    public function index()
    {

        echo $this->view
            ->render('index.html.twig');

    }


}