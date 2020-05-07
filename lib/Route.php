<?php

namespace lib;

class Route
{

    public static function get(string $uri, $controller)
    {
        $request = explode('/', $_SERVER['REQUEST_URI']);

        $request = array_diff($request, ['']);

        unset($request[1]);

        var_dump($request);die;

        if ($request == $uri) {
            echo $controller;
        }

        var_dump($_SERVER['REQUEST_URI']);

    }

}