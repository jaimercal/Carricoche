<?php

require "Contact.php";

class ContactVal extends Contact{
    private $id;
    private $email;
    private $commentary;

    /**
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
     * @return mixed|string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed|string $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed|string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed|string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed|string
     */
    public function getCommentary() {
        return $this->commentary;
    }

    /**
     * @param mixed|string $commentary
     */
    public function setCommentary($commentary) {
        $this->commentary = $commentary;
    }

    public function invalidEmail(){
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    public function contactValidation(){
        if(empty($this->email)){
            exit();
        }else if(empty($this->commentary)){
            exit();
        }else if(!$this->invalidEmail()){
            exit();
        }
        $this->insert($this);
    }
}