<?php

require "Db.php";

class Signup extends Db {
    /**
     * @author Jrc
     * @param $obj
     * @return void
     */
    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $sql = "insert into users (email, name, surname, username, address, password) values ('".$obj->getEmail()."', '".$obj->getName()."', '".$obj->getSurname()."', '".$obj->getUsername()."', '".$obj->getAddress()."', '".$obj->getPassword()."')";
        $connection->query($sql);
    }
}