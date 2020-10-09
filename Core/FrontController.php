<?php

namespace Core;

use Core\Interfaces\RouterInterface;

/**
 * Class FrontController
 *
 * @package Core
 */
class FrontController
{
    protected $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function run()
    {

        $response = $this->router->response();

        if ($response){

            $controllerName = 'App\Controllers\\' . ucfirst($response['controller']);

            $methodName = $response['method'];

            $controller = new $controllerName;

            $controller->setData($response['args']);

            header('Access-Control-Allow-Origin: *');
            header('Content-type: text/html; charset=utf-8');

            echo $controller->access($response['access'])->$methodName();


        } else {

            header("HTTP/1.0 404 Not Found");
            http_response_code(404);

        }

    }

}