<?php

class MySQL extends PDO{    
    public $dsn = 'mysql:host=localhost;dbname=db_sistema';
    public $user = 'root';
    public $pass = 'Eduardo@mysql';
    public function __construct()
    {        
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}