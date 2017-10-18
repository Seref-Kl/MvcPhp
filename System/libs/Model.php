<?php

class Model {
    protected $db = array();

    public function __construct()
    {
        $dsn = 'mysql:dbname=projestaj;host=localhost';
        $user = 'root';
        $password = '';
        $this->db = new Database($dsn, $user, $password);
    }
}


?>