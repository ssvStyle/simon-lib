<?php

namespace lib;

include_once __DIR__ . '/../App/Controllers/Home.php';

use App\Controllers;

class Route
{
    /**
     * @param string $uri
     * @param $controller controller@method
     */

    public static function get(string $uri, $ControllerATmetod)
    {
        $request = explode('/', $_SERVER['REQUEST_URI']);

        $request = array_diff($request, ['']);

        unset($request[1]);

        if (empty($request)){
            $request = '/';
        } else {
            $request = implode('/', $request);
        }




        if ($request === $uri) {
            $ControllerATmetod = explode('@', $ControllerATmetod);
            $name = 'App\Controllers\\'. $ControllerATmetod[0];
            $method = $ControllerATmetod[1];

            $controller = new $name;


            $controller->$method();
        }
    }

}