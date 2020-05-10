<?php

namespace Core;
/**
 * Class ParseUri
 *
 * @package Core
 */
class ParseRequestUri
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