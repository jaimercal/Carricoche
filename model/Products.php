<?php

class Products {
    private $name;
    private $brand;
    private $prize;
    private $kilometers;
    private $color;
    private $type;
    private $year;
    private $power;
    private $frontalPhoto;
    private $lateralPhoto;
    private $freePhoto;
    private $cc;

    /**
     * @param $name
     * @param $brand
     * @param $prize
     * @param $kilometers
     * @param $color
     * @param $type
     * @param $year
     * @param $power
     * @param $frontalPhoto
     * @param $lateralPhoto
     * @param $freePhoto
     * @param $cc
     */
    public function __construct($name, $brand, $prize, $kilometers, $color, $type, $year, $power, $frontalPhoto, $lateralPhoto, $freePhoto, $cc=0) {
        $this->name = $name;
        $this->brand = $brand;
        $this->prize = $prize;
        $this->kilometers = $kilometers;
        $this->color = $color;
        $this->type = $type;
        $this->year = $year;
        $this->power = $power;
        $this->frontalPhoto = $frontalPhoto;
        $this->lateralPhoto = $lateralPhoto;
        $this->freePhoto = $freePhoto;
        $this->cc = $cc;
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
    public function getBrand() {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getPrize() {
        return $this->prize;
    }

    /**
     * @return mixed
     */
    public function getKilometers() {
        return $this->kilometers;
    }

    /**
     * @return mixed
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getYear() {
        return $this->year;
    }

    /**
     * @return mixed
     */
    public function getPower() {
        return $this->power;
    }

    /**
     * @return mixed
     */
    public function getFrontalPhoto() {
        return $this->frontalPhoto;
    }

    /**
     * @return mixed
     */
    public function getLateralPhoto() {
        return $this->lateralPhoto;
    }

    /**
     * @return mixed
     */
    public function getFreePhoto() {
        return $this->freePhoto;
    }

    /**
     * @return int|mixed
     */
    public function getCc() {
        return $this->cc;
    }


}