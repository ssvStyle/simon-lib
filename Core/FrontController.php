<?php

namespace Core;

class FrontController
{

    public function run()
    {

        Route::$request = $this->getRequest();

        require_once __DIR__ . '/../routes/web.php';

        Route::notFound();

    }

    protected function getRequest()
    {
        $request = explode('/', $_SERVER['REQUEST_URI']);

        $request = array_diff($request, ['']);

        unset($request[1]);

        if (empty($request)) {

            $request = '/';

        } else {

            $request = implode('/', $request);

        }

        return $request;
    }

}