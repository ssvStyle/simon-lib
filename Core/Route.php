<?php

namespace Core;

use App\Controllers;

class Route
{
    /**
     * @param string $uri
     * @param $controller controller@method
     */

    public static function get(string $uri, $ControllerATmetod)
    {
        $request = self::request();


        if ($request === $uri) {

            $ControllerATmetod = explode('@', $ControllerATmetod);
            $name = 'App\Controllers\\'. $ControllerATmetod[0];
            $method = $ControllerATmetod[1];

            $controller = new $name;
            $controller->$method();

        }/* else {

            echo '404 Not Found';

        }*/
    }

    public static function request()
    {
        $request = explode('/', $_SERVER['REQUEST_URI']);

        $request = array_diff($request, ['']);

        unset($request[1]);

        if (empty($request)){
            $request = '/';
        } else {
            $request = implode('/', $request);
        }

        return $request;
    }

}