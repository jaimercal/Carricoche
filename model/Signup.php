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

    protected function existingUsername($username){
        $db = new Db();
        $connection = $db->connect();

        $sql = "SELECT username FROM users WHERE username = ?;";
        $stmt = mysqli_stmt_init($connection);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../sign_up.php?error=stmterror");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if(mysqli_fetch_assoc($resultData)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
}