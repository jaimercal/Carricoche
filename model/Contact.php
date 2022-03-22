<?php

require "Db.php";

class Contact extends Db {
    /**
     * @author Jrc
     * @param $obj
     * @return void
     */
    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $sql = "insert into contacts (email, commentary) values ('".$obj->getEmail()."', '".$obj->getCommentary()."')";
        $connection->query($sql);
    }
}