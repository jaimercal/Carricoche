<?php

require_once "Db.php";
class SellM extends Db {
    /**
     * @author Jrc y MVF
     * @param $obj
     * @return void
     */
    protected function insert($obj, $obj2){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->prepare("insert into bikes (name,brand,prize,kilometers,color,type,year,power,cc,sold,frontalPhoto,lateralPhoto,freePhoto) values (?,?,?,?,?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssddsssiiisss", $name, $brand, $price, $kilometers, $color, $type, $year, $power, $cc, $sold, $photoF, $photoL, $photoFree);
        $name = $obj->getName();
        $brand = $obj->getBrand();
        $price = $obj->getPrize();
        $kilometers = $obj->getKilometers();
        $color = $obj->getColors();
        $type = $obj->getType();
        $year = $obj->getYear();
        $power = $obj->getPower();
        $cc = $obj->getCc();
        $photoF = $obj2->getFrontalPhoto();
        $photoL = $obj2->getLateralPhoto();
        $photoFree = $obj2->getFreePhoto();
        $sold = 0;
        $stmt->execute();
        $stmt->close();
        $connection->close();
    }

    public function existingMoto(){
        $db = new Db();
        $connection = $db->connect();
        $stmt = $connection->query("select name, brand, prize, kilometers, color, type, year, power,cc,frontalPhoto,lateralPhoto,freePhoto from bikes where sold = 0;");
        if($array = $stmt->fetch_all(ARRAY_FILTER_USE_BOTH)){
            $result = $array;
        }else{
            $result = array();
        }
        $stmt->close();
        $connection->close();
        return $result;
    }
}