<?php

namespace Core\Interfaces;

/**
 * Interface RouterInterface
 *
 * @package Core\Interfaces
 */
interface RouterInterface
{

    /**
     * RouterInterface constructor.
     *
     * @param RequestInterface $request
     */
    public function __construct(RequestInterface $request);

    /**
     * @return mixed
     */
    public function getParams();

    /**
     * @return array
     */
    public function getRouteMapParams() : array;

    /**
     * @return mixed
     */
    public function response();

}