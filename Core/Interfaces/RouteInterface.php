<?php

namespace Core\interfaces;


interface RouteInterface
{

    public function uri(string $uri, string $ctrlAtMethod);

}