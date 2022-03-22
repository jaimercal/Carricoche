<?php

require "Db.php";

class Login extends Db {
    /**
     * @author Jrc
     * @param $obj
     * @return void
     */
    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $sql = "insert into contacts (email, ) values ('".$obj->getEmail()."', )";
        $connection->query($sql);
    }
}