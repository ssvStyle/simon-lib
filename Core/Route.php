<?php

namespace Core;

use App\Controllers;
use App\View;

class Route
{
    /**
     * @var
     *
     * $request
     */
    public static $request;

    /**
     * @param string $uri

     * @param $controller Controller@method
     */

    public static function get(string $uri, string $ControllerATmetod)
    {
        var_dump(self::$request);die;

        if (self::$request === $uri) {

            $ControllerATmetod = explode('@', $ControllerATmetod);

            $controllerName = 'App\Controllers\\'. $ControllerATmetod[0];
            $methodName = $ControllerATmetod[1];

            $controller = new $controllerName;
            $controller->$methodName();

            exit;

        }

    }


    public static function notFound()
    {

        echo '404 Not Found';

    }

}