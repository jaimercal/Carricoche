<?php

require "Signup.php";

class SignupVal extends Signup {
    private $name;
    private $surname;
    private $username;
    private $email;
    private $address;
    private $password;

    /**
     * @param $name
     * @param $surname
     * @param $username
     * @param $email
     * @param $address
     * @param $password
     */
    public function __construct($name, $surname, $username, $email, $address, $password) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
        $this->email = $email;
        $this->address = $address;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @author Jrc
     * @return bool
     */
    public function invalidEmail(){
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    public function invalidPassword(){
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    public function diffPassword(){

    }

    public function invalidUsername(){

    }

    /**
     * @author Jrc
     * @return void
     */
    public function signupValidation(){
        if(empty($this->email)){
            header("location: ../contact.php?error=emptyinput");
            exit();
        }else if(empty($this->commentary)){
            header("location: ../contact.php?error=emptyinput");
            exit();
        }else if(!$this->invalidEmail()){
            header("location: ../contact.php?error=invalidemail");
            exit();
        }
        $this->insert($this);
    }
}