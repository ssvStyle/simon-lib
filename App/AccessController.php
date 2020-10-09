<?php

namespace App;

use Core\BaseController;

class AccessController extends BaseController
{

    public function access($bool = null)
    {

        if ($bool === true) {
            return $this;
        }
        header("HTTP/1.0 401 Unauthorized");
        http_response_code(401);
        exit();
    }
}