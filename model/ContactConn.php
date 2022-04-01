<?php

require "Db.php";

class ContactConn extends Db {
    /**
     * @author Jrc
     * @param $obj
     * @return void
     */
    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->prepare("insert into contacts (email, commentary) values (?, ?);");
        $stmt->bind_param("ss", $email, $commentary);
        $email = $obj->getEmail();
        $commentary = $obj->getCommentary();
        $stmt->execute();
        $stmt->close();
        $connection->close();

        /*$sql = "insert into contacts (email, commentary) values ('".$obj->getEmail()."', '".$obj->getCommentary()."')";
        $connection->query($sql);*/
    }
}