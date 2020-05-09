<?php

namespace Core;
/**
 * Class ParseUri
 *
 * @package Core
 */
class ParseRequestUri
{

    /**
     * @return string
     */
    public function get()
    {
        $request = explode('/', $_SERVER['REQUEST_URI']);

        $request = array_diff( $request, [''] );

        unset( $request[1] );

        if (preg_match_all('~[?]\w*[=]\w*~', end($request))) {

            array_pop($request);

        }

        if ( empty( $request ) ) {

            $request = '/';

        } else {

            $request = implode('/', $request);

        }

        return $request;
    }

    public function getParams()
    {



    }

}