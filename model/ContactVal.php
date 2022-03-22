<?php

require "Contact.php";

class ContactVal extends Contact{
    private $id;
    private $email;
    private $commentary;

    /**
     * @author Jrc
     * @param $id
     * @param $email
     * @param $commentary
     */
    public function __construct($email="", $commentary="",$id="") {
        $this->id = $id;
        $this->email = $email;
        $this->commentary = $commentary;
    }

    /**
     * @author Jrc
     * @return mixed|string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @author Jrc
     * @param mixed|string $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @author Jrc
     * @return mixed|string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @author Jrc
     * @param mixed|string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @author Jrc
     * @return mixed|string
     */
    public function getCommentary() {
        return $this->commentary;
    }

    /**
     * @author Jrc
     * @param mixed|string $commentary
     */
    public function setCommentary($commentary) {
        $this->commentary = $commentary;
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

    /**
     * @author Jrc
     * @return void
     */
    public function contactValidation(){
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