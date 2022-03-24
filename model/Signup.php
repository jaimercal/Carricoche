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
        $sql = "insert into users (email, name, surname, username, address, password) values ('".$obj->user->getEmail()."', '".$obj->user->getName()."', '".$obj->user->getSurname()."', '".$obj->user->getUsername()."', '".$obj->user->getAddress()."', '".$obj->user->getPassword()."')";
        $connection->query($sql);
    }
}