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

        if($row = mysqli_fetch_assoc($resultData)){
            $result = true;
            return $row;
        }else{
            $result = false;
        }
        return $result;
        mysqli_stmt_close($stmt);
    }
}