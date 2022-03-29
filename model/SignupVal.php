<?php

require "Signup.php";

class SignupVal extends Signup {
    private $user;
    private $pass;

    /**
     * @param $user
     * @param $pass
     */
    public function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user) {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPass() {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass) {
        $this->pass = $pass;
    }

    /**
     * @author Jrc
     * @return bool
     */
    public function invalidEmail(){
        if (!filter_var($this->user->getEmail(), FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    /**
     * @return bool
     */
    public function invalidPassword(){
        if (!preg_match('@[A-Z]@', $this->pass) && !preg_match('@[a-z]@', $this->pass) && !preg_match('@[0-9]@', $this->pass)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    /**
     * @return bool
     */
    public function diffPassword(){
        if($this->user->getPassword()!==$this->pass){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    /**
     * @return bool
     */
    public function invalidUsername(){
        if (!preg_match('@[A-Z]@', $this->user->getUsername()) && !preg_match('@[a-z]@', $this->user->getUsername())){
            $result = false;
        }else{
            $result = true;
        }
        echo $result;
        return $result;
    }

    /**
     * @return bool
     */
    public function emptyInput(){
        if(empty($this->user->getEmail())||empty($this->user->getName())||empty($this->user->getSurname())||empty($this->user->getUsername())||empty($this->user->getAddress())||empty($this->user->getPassword())||empty($this->pass)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    /**
     * @author Jrc
     * @return void
     */
    public function signupValidation(){
        if($this->emptyInput()){
            header("location: ../sign_up.php?error=emptyinput");
            exit();
        }else if(!$this->invalidEmail()){
            header("location: ../sign_up.php?error=invalidemail");
            exit();
        }else if(!$this->diffPassword()){
            header("location: ../sign_up.php?error=passwordmatch");
            exit();
        }else if(!$this->invalidPassword()){
            header("location: ../sign_up.php?error=invalidpassword");
            exit();
        }else if(!$this->invalidUsername()){
            header("location: ../sign_up.php?error=invalidusername");
            exit();
        }else if($this->existingUsername($this->user->getUsername())){
            header("location: ../sign_up.php?error=existingusername");
            exit();
        }
        $this->insert($this->user);
    }
}