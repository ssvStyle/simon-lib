<?php

namespace Core;

class FrontController
{

    public function run()
    {

        $route = new Route(new ParseRequestUri());

        require_once __DIR__ . '/../routes/web.php';

        if (!$route->params){

            echo '404 Not Found';

        } else {

            $controllerName = $route->params['ctrl'];
            $methodName = $route->params['method'];

            $controller = new $controllerName;

            $controller->setData([
                'get' => $_GET,
                'post' => $_POST,
                'files' => $_FILES,
            ]);

            $controller->$methodName();

        }


    }

}