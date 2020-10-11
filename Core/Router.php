<?php

namespace Core;

class Router implements \Core\Interfaces\RouterInterface
{
    protected $routeMap;

    protected $requestMethod;

    protected $routeMapParams;
    
    protected $request;

    protected $params = [];

    protected $parseRoute;

    public function __construct(string $request)
    {
        $patternGetParams = '~([?]\w*[=]\w*).+~';

        $request = preg_replace($patternGetParams, '', $request);

        $request = preg_replace('~^\/[\w\-\.\+\?\#]*~', '', $request);

        $request = preg_replace('~\/$~', '', $request);

        if ( empty( $request ) ) {

            $request = '/';

        }

        $this->request = $request;
        
        $this->routeMap = include __DIR__ . '/../routes/web.php';

        $this->parseRoute = new ParseRoute();

        $this->requestMethod= filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_ENCODED);


    }

    public function getParams() : array
    {
        return $this->params;
    }

    public function getRouteMapParams() : array
    {
        return $this->routeMapParams;
    }

    public function response(): bool
    {

        foreach ($this->routeMap as $web) {

            $routeReqMethod = $web['requestMethod'] ?? 'GET';

            $routeCond = $web['route'] === $this->request ||
                         (bool)preg_match($this->parseRoute->getRegexpFromRoute($web['route']), $this->request, $params) &&
                         $this->requestMethod === $routeReqMethod;

            if ($routeCond) {

                //unset($params[0]);

                if (!empty($params)) {

                    foreach ($params as $k => $v) {
                        if (!is_numeric($k)) {

                            $this->params[$k] = $v;

                        }
                    }

                }

                $this->routeMapParams = $web;

                return true;

            }
        }

        return false;
    }
}