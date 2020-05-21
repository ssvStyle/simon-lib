<?php

namespace Core;

use App\Controllers\Home;

class FrontController
{

    public function run()
    {

        $router = new Router( $_SERVER['REQUEST_URI'] );

        $response = $router->response();

        if ($response){

            $parseCtrlAtMethod = new ParseCtrlAndMethodName($response['ctrlAtMethod']);


            $controllerName = 'App\Controllers\\'. $parseCtrlAtMethod->getCtrl();
            $methodName = $parseCtrlAtMethod->getMethod();

            $controller = new $controllerName;

            $controller->setData($response['args']);

            $controller->$methodName();


        } else {

            http_response_code(404);

            include __DIR__ . '/../templates/404.html';

        }


    }

}