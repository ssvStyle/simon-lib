<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/config.php';
        $this->dbh = new \PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'].';charset=utf8', $config['db']['user'], $config['db']['pass']);

    }

    public function query($sql, $data = [], $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return  $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }


    /**
     * @param $sql
     * @return array
     */
    public function simpleQuery($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return  $sth->fetch(\PDO::FETCH_ASSOC);
    }
}