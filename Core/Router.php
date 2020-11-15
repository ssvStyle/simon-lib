<?php

namespace Core;

use Core\Interfaces\RequestInterface;

/**
 * Class Router
 *
 * @package Core
 */
class Router implements \Core\Interfaces\RouterInterface
{
    /**
    * @var array
    */
    protected $routeMap;

    /**
     * @var array
     */
    protected $routeMapParams;

    /**
     * @var object
     *
     * RequestInterface
     */
    protected $request;

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var object
     */
    protected $logger;

    /**
     * Router constructor.
     *
     * @param RequestInterface $request
     */

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
        $this->routeMap = include __DIR__ . '../../routes/web.php';
        $this->logger = new Loger();
    }

    /**
     * @return array
     */
    public function getParams() : array
    {
        return $this->params;
    }

    /**
     * @return array
     */
    public function getRouteMapParams() : array
    {
        return $this->routeMapParams;
    }

    /**
     * @return bool|mixed
     */
    public function response()
    {

        foreach ($this->routeMap as $web) {

            $routeReqMethod = $web['requestMethod'] ?? 'GET';

            if ((bool)preg_match('~\}\?~', $web['route'])) {
                $route = str_replace('/{', '(/(?<', $web['route']);
                $route = str_replace('}', '>(\w*)))', $route);
            } else {
                $route = str_replace('{', '(?<', $web['route']);
                $route = str_replace('}', '>(\w*))', $route);
            }

            $routeCond = ($web['route'] === $this->request->get() ||
                (bool)preg_match('~^' . $route . '$~', $this->request->get(), $params) &&
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

        $this->logger->log('info', 'Route not found' , [
            'Request' =>  $this->request->get(),
            'Request Method' => $this->request->getMethod(),
        ]);


        header("HTTP/1.0 404 Not Found");
        http_response_code(404);

        require_once __DIR__ . '../../templates/404.html';

        exit();
    }
}