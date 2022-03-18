<?php

class Contact extends Db {

    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $sql = "insert into contacts (email, commentary) values ('".$obj->getEmail()."', '".$obj->getCommentary()."')";
        echo $sql;
        $connection->query($sql);
    }
}