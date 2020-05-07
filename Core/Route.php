<?php

namespace Core;

use App\Controllers;
use App\View;

class Route
{

    public static $notFound;

    public static $request;

    /**
     * @param string $uri

     * @param $controller Controller@method
     */

    public static function get(string $uri, $ControllerATmetod)
    {

        if (self::$request === $uri) {

            $ControllerATmetod = explode('@', $ControllerATmetod);

            $controllerName = 'App\Controllers\\'. $ControllerATmetod[0];
            $methodName = $ControllerATmetod[1];

            $controller = new $controllerName;
            $controller->$methodName();

            exit;

        }

        self::$notFound = true;

    }


    public static function notFound()
    {

        echo '404 Not Found';

    }

}