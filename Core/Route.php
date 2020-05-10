<?php

namespace Core;

class Route
{

    public $params = [];

    protected $requestUri;

    public function __construct(ParseRequestUri $parseRequestUri)
    {
        $this->requestUri = $parseRequestUri->get();
    }


    public function uri(string $uri, string $ctrlAtMethod)
    {

        if ($this->requestUri === $uri) {

            $ctrlAtMethod = explode('@', $ctrlAtMethod);

            $this->params['ctrl'] = $ctrlAtMethod[0];
            $this->params['method'] = $ctrlAtMethod[1];

        }

    }

}