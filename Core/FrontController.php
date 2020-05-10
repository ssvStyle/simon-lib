<?php

namespace Core;

use App\Controllers\Home;

class FrontController
{

    public function run()
    {

        $route = new Route(new ParseRequestUri( $_SERVER['REQUEST_URI'] ));

        require_once __DIR__ . '/../routes/web.php';

        $route->uri('registration', 'Auth\Authorization@registration');
        $route->uri('login', 'Auth\Authorization@login');
        $route->uri('logout', 'Auth\Authorization@logout');


        if (!$route->params){

            $home = new Home();

            $home->notFound();

        } else {

            $controllerName = 'App\Controllers\\'.$route->params['ctrl'];
            $methodName = $route->params['method'];

            $controller = new $controllerName;

            $controller->$methodName();

        }


    }

}