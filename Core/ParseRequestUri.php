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
        //var_dump($_SERVER['REQUEST_URI']);die;
        //$request = array_diff( $request, [''] );

        unset( $request[1] );

        $patternGetRequest = '~([?]\w*[=]\w*).+~';

        if (preg_match($patternGetRequest, end($request))) {

            $request = preg_replace($patternGetRequest, '', $request);

        }

        $request = array_diff( $request, [''] );

        if ( empty( $request ) ) {

            $request = '/';

        } else {

            $request = implode('/', $request);

        }

        return $request;
    }

}