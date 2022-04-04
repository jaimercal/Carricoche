<?php

require "Db.php";
class SellC extends Db {
    /**
     * @author Jrc y MVF
     * @param $obj
     * @return void
     */
    protected function insert($obj, $obj2){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->prepare("insert into cars (name,brand,prize,kilometers,color,type,year,power,sold,frontalPhoto,lateralPhoto,freePhoto) values (?,?,?,?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssddsssiisss", $name, $brand, $price, $kilometers, $color, $type, $year, $power, $sold, $photoF, $photoL, $photoFree);
        $name = $obj->getName();
        $brand = $obj->getBrand();
        $price = $obj->getPrize();
        $kilometers = $obj->getKilometers();
        $color = $obj->getColors();
        $type = $obj->getType();
        $year = $obj->getYear();
        $power = $obj->getPower();
        $photoF = $obj2->getFrontalPhoto();
        $photoL = $obj2->getLateralPhoto();
        $photoFree = $obj2->getFreePhoto();
        $sold = 0;
        $stmt->execute();
        $stmt->close();
        $connection->close();
    }

    public function existingCar($sold){
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