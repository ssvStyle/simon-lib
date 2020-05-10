<?php

namespace Core;

use \Core\Interfaces\ParseRequestUri as ParseRequestUriInterface;
/**
 * Class ParseUri
 *
 * @package Core
 */
class ParseRequestUri implements ParseRequestUriInterface
{

    protected $request;

    public function __construct(string $request)
    {
        $patternGetParams = '~([?]\w*[=]\w*).+~';

        $request = preg_replace($patternGetParams, '', $request);

        $request = preg_replace('~^\/[\w\-\.\+\?\#]*\/~', '', $request);

        $request = preg_replace('~\/$~', '', $request);

        if ( empty( $request ) ) {

            $request = '/';

        }
        
        $this->request = $request;

    }

    /**
     * @return string
     */
    public function get()
    {

        return $this->request;

    }

}