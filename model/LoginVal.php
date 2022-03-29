<?php

class LoginVal extends Login {
    private $register;
    private $pass;

    /**
     * @param $register
     * @param $pass
     */
    public function __construct($register, $pass) {
        $this->register = $register;
        $this->pass = $pass;
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
    public function getPass() {
        return $this->pass;
    }


}