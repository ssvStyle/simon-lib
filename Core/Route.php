<?php

namespace Core;

class Route
{

    public $params = [];

    protected $requestUri;

    public function __construct(ParseRequestUri $parseRequestUri)
    {
        $this->requestUri = $parseRequestUri;
    }


    public function uri(string $uri, string $ctrlAtMethod)
    {

        if ($this->requestUri->get() === $uri) {

            $ctrlAtMethod = explode('@', $ctrlAtMethod);

            $this->params['ctrl'] = 'App\Controllers\\'.$ctrlAtMethod[0];
            $this->params['method'] = $ctrlAtMethod[1];

        }

    }

}