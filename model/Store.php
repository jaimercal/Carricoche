<?php

require_once "SellCars.php";
require_once "SellMotos.php";
require_once "Products.php";

class Store {


    public function genCars(){
        $sellC = new SellCars();
        $array = $sellC->existingCar();
        $result = [];
        foreach ($array as $car){
            $cars = new Products($car['name'],$car['brand'],$car['prize'],$car['kilometers'],$car['color'],$car['type'],$car['year'],$car['power'],$car['frontalPhoto'],$car['lateralPhoto'],$car['freePhoto']);
            array_push($result, $cars);
        }
        return $result;
    }

    public function genMotos(){
        $sellM = new SellMotos();
        $array = $sellM->existingMoto();
        $result = [];
        foreach ($array as $moto){
            $motos = new Products($moto['name'],$moto['brand'],$moto['prize'],$moto['kilometers'],$moto['color'],$moto['type'],$moto['year'],$moto['power'],$moto['frontalPhoto'],$moto['lateralPhoto'],$moto['freePhoto'],$moto['cc']);
            array_push($result, $motos);
        }
        return $result;
    }

    public function printC(){
        $cars = $this->genCars();
        $result = "";
        foreach ($cars as $car){
            $result .= "<div class='product'><div class='imgP'><img src='".$car->getFrontalPhoto()."'></div>";
            $result .= "<div class='nameP'><h3>".$car->getName()."</h3></div>";
            $result .= "<div class='textP'><div class='brandP atrP'><h4>Marca: ".$car->getBrand()."</h4></div>";
            $result .= "<div class='typeP atrP'><h4>Tipo: ".$car->getType()."</h4></div>";
            $result .= "<div class='colorP atrP'><h4>Color: ".$car->getColor()."</h4></div>";
            $result .= "<div class='kmP atrP'><h4>Kilómetros: ".$car->getKilometers()."km</h4></div>";
            $result .= "<div class='yearP atrP'><h4>Año Matriculación: ".$car->getYear()."</h4></div>";
            $result .= "<div class='powerP atrP'><h4>Potencia: ".$car->getPower()."cv</h4></div></div>";
            $result .= "<div class='prizeP'><h3>Precio: ".$car->getPrize()."€</h3></div>";
            $result .= "</div>";
        }
        return $result;
    }

    public function printM(){
        $motos = $this->genMotos();
        $result = "";
        foreach ($motos as $moto){
            $result .= "<div class='product'><div class='imgP'><img src='".$moto->getFrontalPhoto()."'></div>";
            $result .= "<div class='nameP'><h3>".$moto->getName()."</h3></div>";
            $result .= "<div class='textP'><div class='brandP atrP'><h4>Marca: ".$moto->getBrand()."</h4></div>";
            $result .= "<div class='typeP atrP'><h4>Tipo: ".$moto->getType()."</h4></div>";
            $result .= "<div class='colorP atrP'><h4>Color: ".$moto->getColor()."</h4></div>";
            $result .= "<div class='kmP atrP'><h4>Kilómetros: ".$moto->getKilometers()."km</h4></div>";
            $result .= "<div class='yearP atrP'><h4>Año Matriculación: ".$moto->getYear()."</h4></div>";
            $result .= "<div class='ccP atrP'><h4>Cilindrada: ".$moto->getCc()."cc</h4></div>";
            $result .= "<div class='powerP atrP'><h4>Potencia: ".$moto->getPower()."cv</h4></div></div>";
            $result .= "<div class='prizeP'><h3>Precio: ".$moto->getPrize()."€</h3></div>";
            $result .= "</div>";
        }
        return $result;
    }
}