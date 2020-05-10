<?php

namespace App\Models;


class User
{

    protected $id;
    protected $login;
    protected $pass;
    protected $hash;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }

}