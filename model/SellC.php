<?php

require "Db.php";

class SellC extends Db{

    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $sql = "insert into cars (name,brand,prize,kilometers,color,type,year,power,)
            values ('".$obj->getName()."','".$obj->getBrand()."','".$obj->getPrize()."','".$obj->getKilometers()."','".$obj->getColors()."','".$obj->getType()."','".$obj->getYear()."','".$obj->getPower()."')";
        $connection->query($sql);
    }
}