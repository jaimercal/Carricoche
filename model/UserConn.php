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
        $sql = "insert into users (email, name, surname, username, address, password) values (?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($connection);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../sign_up.php?error=stmterror");
            exit();
        }

        $hashedPass = password_hash($obj->getPassword(), PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssssss", $obj->getEmail(), $obj->getName(), $obj->getSurname(), $obj->getUsername(), $obj->getAddress(), $hashedPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    /**
     * @param $username
     * @param $email
     * @return array|false|string[]|void
     */
    protected function existingUser($username, $email){
        $db = new Db();
        $connection = $db->connect();

        $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
        $stmt = mysqli_stmt_init($connection);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../sign_up.php?error=stmterror");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            $result = false;
        }
        return $result;
        mysqli_stmt_close($stmt);
    }
}