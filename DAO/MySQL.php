<?php

class MySQL extends PDO{
    public $dsn, $user, $pass;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3307;dbname=db_sistema';
        $user = 'root';
        $pass = 'etecjau';
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}