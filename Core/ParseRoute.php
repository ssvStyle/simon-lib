<?php

namespace Core;

class ParseRoute implements \Core\Interfaces\ParseRouteInterface
{
     /**
     *
     * @return string
     */
    public function getRegexpFromRoute(string $route) : string
    {
        $route = str_replace('{', '(?<', $route);
        $route = str_replace('}', '>(\w*))', $route);

        return '~^' . $route . '$~';

    }
}