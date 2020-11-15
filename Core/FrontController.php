<?php

namespace Core;

/**
 * Class FrontController
 *
 * @package Core
 *
 */
class FrontController
{
    /**
     * @var loger|object
     * @var routeMapParams|array
     * @var data|array
     */
    protected $loger, $routeMapParams, $data;

    /**
     * FrontController constructor.
     */
    public function __construct()
    {
        $this->loger = new Loger();

    }

    /**
     * @param array $params
     */
    public function setRouteMapParams(array $params)
    {
        $this->routeMapParams = $params;
    }

    /**
     * @param array $params
     */
    public function setGetData(array $params)
    {
        $this->data = $params;
    }

    /**
     * @return text|html
     */
    public function start()
    {

        $controllerName = 'App\Controllers\\' . ucfirst($this->routeMapParams['controller']);
        $methodName = $this->routeMapParams['method'];

        $controller = new $controllerName;

        $controller->setData($this->data);

        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/html; charset=utf-8');
        http_response_code(200);

        echo $controller->$methodName();


    }

}