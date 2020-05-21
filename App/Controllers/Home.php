<?php

namespace App\Controllers;

use Core\BaseController;

class Home extends BaseController
{

    public function index()
    {

        return $this->view
            ->render('index.html.twig', ['foo' => ' А это текст из переменной']);

    }


}