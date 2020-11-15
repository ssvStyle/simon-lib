<?php

namespace Core;

use Core\Interfaces\RequestInterface;

/**
 * Class Request
 *
 * @package Core
 */
class Request implements RequestInterface
{
    /**
     * @var request
     */
    protected $request;

    public function __construct(string $request)
    {
        $request = stristr($request, '?', true) ?: $request;
        $request = preg_replace('~\/$~', '', $request);

        if (empty( $request) ) {

            $request = '/';

        }

        $this->request = $request;

    }

    /**
     * @return string
     */
    public function getMethod() :string
    {

        return filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_ENCODED);
        
    }

    public function get() : string
    {
        return $this->request;
    }

}