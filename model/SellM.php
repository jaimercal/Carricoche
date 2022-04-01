<?php

require "Db.php";

class SellM extends Db{
    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $sql = "insert into cars (name,brand,prize,kilometers,color,type,year,power,cc)
            values ('".$obj->getName()."','".$obj->getBrand()."','".$obj->getPrize()."','".$obj->getKilometers()."','".$obj->getColors()."','".$obj->getType()."','".$obj->getYear()."','".$obj->getPower()."','".$obj->getCc()."')";
        $connection->query($sql);
    }
}