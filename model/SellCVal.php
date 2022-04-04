<?php

require "SellC.php";
require "Products.php";

class SellCVal extends SellC {
    private $name;
    private $brand;
    private $prize;
    private $kilometers;
    private $color;
    private $type;
    private $year;
    private $power;
    private $photo;

    /**
     * @author JRC y MVF
     * @param $name
     * @param $brand
     * @param $prize
     * @param $kilometers
     * @param $color
     * @param $type
     * @param $year
     * @param $power
     */
    public function __construct( $name, $brand, $prize, $kilometers, $color, $type, $year, $power, $photo) {

        $this->name = $name;
        $this->brand = $brand;
        $this->prize = $prize;
        $this->kilometers = $kilometers;
        $this->color = $color;
        $this->type = $type;
        $this->year = $year;
        $this->power = $power;
        $this->photo = $photo;
    }


    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBrand() {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand) {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getPrize() {
        return $this->prize;
    }

    /**
     * @param mixed $prize
     */
    public function setPrize($prize) {
        $this->prize = $prize;
    }

    /**
     * @return mixed
     */
    public function getKilometers() {
        return $this->kilometers;
    }

    /**
     * @param mixed $kilometers
     */
    public function setKilometers($kilometers) {
        $this->kilometers = $kilometers;
    }

    /**
     * @return mixed
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color) {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getYear() {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year) {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getPower() {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power) {
        $this->power = $power;
    }

    public function emptyInput(){
        if(empty($this->name)){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if(empty($this->brand)){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if(empty($this->prize)){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }if(empty($this->kilometers)){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if(empty($this->color)){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if(empty($this->type)){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if(empty($this->year)){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if(empty($this->power)){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if(empty($this->photo->getFrontalPhoto())){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if(empty($this->photo->getLateralPhoto())){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if(empty($this->photo->getFreePhoto())){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }
    }

    function photosC(){
        $photoF = $this->photo->getFrontalPhoto();
        $photoL = $this->photo->getLateralPhoto();
        $photoFree = $this->photo->getFreePhoto();

        $valPF = $this->photo->subirFoto($photoF);
        $valPL = $this->photo->subirFoto($photoL);
        $valPFree = $this->photo->subirFoto($photoFree);

        if($valPF==null){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if($valPL==null){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }else if($valPFree==null){
            header("location: ../sell.php?error=emptyinput");
            exit();
        }

        $this->photo->setFrontalPhoto("../img/imgStore/".$valPF);
        $this->photo->setLateralPhoto("../img/imgStore/".$valPL);
        $this->photo->setFreePhoto("../img/imgStore/".$valPFree);
    }

    public function sellCValidation(){
        $this->emptyInput();
        if (!isset($_SESSION['username'])){
            header("location: ../sell.php?error=notloged");
            exit();
        }
        $this->photosC();
        $this->insert($this, $this->photo);
    }


}