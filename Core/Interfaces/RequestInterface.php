<?php

namespace Core\Interfaces;

/**
 * Interface RequestInterface
 *
 * @package Core\Interfaces
 */
interface RequestInterface
{

    /**
     * @return string
     */
    public function get() : string;

    /**
     * @return string
     */
    public function getMethod() : string;
}