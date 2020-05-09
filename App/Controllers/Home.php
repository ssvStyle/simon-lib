<?php

namespace App\Controllers;

use Core\BaseController;

class Home extends BaseController
{

    public function index()
    {
        echo 'Hello a am controller Home and method index';
    }

    public function show()
    {
        echo 'Hello a am controller Home and method show and data - ';
        var_dump($this->data);
    }

    public function showById()
    {
        echo 'Hello a am controller Home and method show and data from uri - ' . $this->data['get']['id'];
    }

}