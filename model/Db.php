<?php

class Db {
    private $server = "localhost";
    private $user = "root";
    private $pass = "12345";
    private $database = "carricoche";
    private $port = "3360";
    private $connection;

    public function __construct(){
        $this->connection = new mysqli($this->server, $this->user, $this->pass, $this->database, $this->port);
        $this->connection->select_db($this->database);
        $this->connection->query("set names 'utf8'");
    }

    protected function connect(){
        return $this->connection;
    }
}