<?php

require "Db.php";
class SellM extends Db {
    /**
     * @author Jrc y MVF
     * @param $obj
     * @return void
     */
    protected function insert($obj){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->prepare("insert into bikes (name,brand,prize,kilometers,color,type,year,power,cc,sold) values (?,?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssddsssiii", $name, $brand, $price, $kilometers, $color, $type, $year, $power, $cc, $sold);
        $name = $obj->getName();
        $brand = $obj->getBrand();
        $price = $obj->getPrize();
        $kilometers = $obj->getKilometers();
        $color = $obj->getColors();
        $type = $obj->getType();
        $year = $obj->getYear();
        $power = $obj->getPower();
        $cc = $obj->getCc();
        $sold = 0;
        $stmt->execute();
        $stmt->close();
        $connection->close();
    }

    protected function existingMoto($sold){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->prepare("select * from bikes where sold = ?;");
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