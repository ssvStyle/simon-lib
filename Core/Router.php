<?php

namespace Core;

use Core\Interfaces\RequestInterface;

class Router implements \Core\Interfaces\RouterInterface
{
    protected $routeMap;

    protected $routeMapParams;
    
    protected $request;

    protected $params = [];

    public function __construct(RequestInterface $request)
    {

        $this->request = $request;
        
        $this->routeMap = include __DIR__ . '../../routes/web.php';


    }

    public function getParams() : array
    {
        return $this->params;
    }

    public function getRouteMapParams() : array
    {
        return $this->routeMapParams;
    }

    public function response()
    {
        $loger = new Loger();

        foreach ($this->routeMap as $web) {

            $routeReqMethod = $web['requestMethod'] ?? 'GET';

            if ((bool)preg_match('~\}\?~', $web['route'])) {
                $route = str_replace('/{', '(/(?<', $web['route']);
                $route = str_replace('}', '>(\w*)))', $route);
            } else {
                $route = str_replace('{', '(?<', $web['route']);
                $route = str_replace('}', '>(\w*))', $route);
            }

            $routeCond = ($web['route'] === $this->request ||
                (bool)preg_match('~^' . $route . '$~', $this->request, $params) &&
                $this->request->getMethod() === $routeReqMethod);

            if ($routeCond) {
                $emptyParamValue = false;
                if (!empty($params)) {
                    foreach ($params as $k => $v) {
                        if (empty($v)){
                            $emptyParamValue = true;
                        }
                        if (!is_numeric($k)) {
                            $this->params[$k] = $v;
                        }
                    }
                }

                if (!$emptyParamValue){
                    $this->routeMapParams = $web;
                    return true;
                }
            }
        }

        $loger->log('info', 'Route not found' , [
            'Request' =>  $this->request,
            'Request Method' => $this->requestMethod,
        ]);


        header("HTTP/1.0 404 Not Found");
        http_response_code(404);

        require_once __DIR__ . '../../templates/404.html';

        exit();
    }
}