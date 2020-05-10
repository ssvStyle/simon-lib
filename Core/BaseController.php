<?php

namespace Core;

use App\View;
use Core\interfaces\BaseController as BaseControllerInterfase;

abstract class BaseController implements BaseControllerInterfase
{
    /*
     *$data for transfer to all classes of controllers
     */

    public $data;

    /*
     *$view obj for transfer to all classes of controllers
     */

    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * @param array $data
     */
    public function setData(array $data = [])
    {
        $this->data = $data;
    }

}