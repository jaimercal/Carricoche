<?php

require "Db.php";

class UserConn extends Db {
    /**
     * @author Jrc
     * @param $obj
     * @return void
     */
    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->prepare("insert into users (email, name, surname, username, address, password) values (?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("ssssss", $email, $name, $surname, $username, $address, $hashedPass);
        $email = $obj->getEmail();
        $name = $obj->getName();
        $surname = $obj->getSurname();
        $username = $obj->getUsername();
        $address = $obj->getAddress();
        $hashedPass = password_hash($obj->getPassword(), PASSWORD_DEFAULT);
        $stmt->execute();
        $stmt->close();
        $connection->close();
    }

    /**
     * @param $username
     * @param $email
     * @return array|false|string[]|void
     */
    protected function existingUser($username, $email){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->prepare("select * from users where username = ? or email = ?;");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $resultData = $stmt->get_result();
        if($row = $resultData->fetch_assoc()){
            return $row;
        }else{
            $result = false;
        }
        $stmt->close();
        $connection->close();
        return $result;
    }
}