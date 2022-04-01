<?php

require "Db.php";
class SellC extends Db {
    /**
     * @author Jrc y MVF
     * @param $obj
     * @return void
     */
    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->prepare("insert into cars (name,brand,prize,kilometers,color,type,year,power,sold) values (?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssddsssii", $name, $brand, $price, $kilometers, $color, $type, $year, $power, $sold);
        $name = $obj->getName();
        $brand = $obj->getBrand();
        $price = $obj->getPrize();
        $kilometers = $obj->getKilometers();
        $color = $obj->getColors();
        $type = $obj->getType();
        $year = $obj->getYear();
        $power = $obj->getPower();
        $sold = 0;
        $stmt->execute();
        $stmt->close();
        $connection->close();
    }

    protected function existingCar($sold){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->prepare("select * from cars where sold = ?;");
        $stmt->bind_param("i", $sold);
        $stmt->execute();
        $resultData = $stmt->get_result();
        if($array = $resultData->fetch_assoc()){
            return $array;
        }else{
            $result = false;
        }
        $stmt->close();
        $connection->close();
        return $result;
    }

}