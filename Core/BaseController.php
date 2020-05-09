<?php

namespace Core;

use Core\interfaces\BaseController as BaseControllerInterfase;

abstract class BaseController implements BaseControllerInterfase
{
    /*
     *$data for transfer to all classes of controllers
     */

    public $data;

    /**
     * @param array $data
     */
    public function setData(array $data = [])
    {
        $this->data = $data;
    }

}