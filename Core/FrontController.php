<?php

namespace Core;

use App\Service\Access;
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

        if ($this->router->response()){

            $params = $this->router->getRouteMapParams();

            $controllerName = 'App\Controllers\\' . ucfirst($params['controller']);
            $methodName = $params['method'];

            $access = new Access();

            if ($access->permission($params['access'] ?? 'all')) {

                $controller = new $controllerName;

                $controller->setData($this->router->getParams());

                header('Access-Control-Allow-Origin: *');
                header('Content-type: text/html; charset=utf-8');

                echo $controller->$methodName();

            } else {

                header("HTTP/1.0 401 Unauthorized");
                http_response_code(401);
                exit('Access Denied. You don’t have permission to access for this page');

            }



        } else {

            include __DIR__ . '/../templates/404.html';

            header("HTTP/1.0 404 Not Found");
            http_response_code(404);

        }

    }

}