<?php

require "UserConn.php";

class Login extends UserConn {
    private $register;
    private $password;

    /**
     * @param $register
     * @param $pass
     */
    public function __construct($register, $pass) {
        $this->register = $register;
        $this->password = $pass;
    }

    /**
     * @return mixed
     */
    public function getRegister() {
        return $this->register;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    public function emptyInput(){
        if(empty($this->register)||empty($this->password)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    public function invalidPassword(){
        if (strlen($this->password) < 4){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    public function loginValidation(){
        if($this->emptyInput()){
            header("location: ../log_in.php?error=emptyinput");
            exit();
        }else if(!$this->invalidPassword()){
            header("location: ../log_in.php?error=invalidpassword");
            exit();
        }
    }

    public function logIn(){
        $this->loginValidation();
        $user = $this->existingUser($this->register, $this->register);
        if(!$user){
            header("location: ../log_in.php?error=usernotexisting");
            exit();
        }
        $hashedPass = $user['password'];
        $checkPass = password_verify($this->password, $hashedPass);
        if($checkPass){
            session_start();
            $_SESSION['userId'] = $user['id_users'];
            $_SESSION['username'] = $user['username'];
            header("location: ../index.php");
            exit();
        }else{
            header("location: ../log_in.php?error=incorrectpassword");
            exit();
        }
    }
}