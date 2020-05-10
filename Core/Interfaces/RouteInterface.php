<?php

namespace Core\interfaces;


interface RouteInterface
{

    public function uri(string $urn, string $ctrlAtMethod);

}