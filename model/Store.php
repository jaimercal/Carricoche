<?php

require "SellC.php";
require "SellM.php";
require "Products.php";

class Store {


    public function genCars(){
        $sellC = new SellC();
        $array = $sellC->existingCar(0);
        if(!$array){
            header("location: ../index.php?error=emptystore");
            exit();
        }
        $result = [];
        for($i = 0; $i<sizeof($array); $i++){
            $cars = new Products($array[$i]['name'],$array[$i]['brand'],$array[$i]['prize'],$array[$i]['kilometers'],$array[$i]['color'],$array[$i]['type'],$array[$i]['year'],$array[$i]['power'],$array[$i]['frontalPhoto'],$array[$i]['lateralPhoto'],$array[$i]['freePhoto']);
            array_push($result, $cars);
        }
        return $result;
    }

    public function genMotos(){
        $sellM = new SellM();
        $array = $sellM->existingMoto(0);
        if(!$array){
            header("location: ../index.php?error=emptystore");
            exit();
        }
        $result = [];
        for($i = 0; $i<sizeof($array); $i++){
            $motos = new Products($array[$i]['name'],$array[$i]['brand'],$array[$i]['prize'],$array[$i]['kilometers'],$array[$i]['color'],$array[$i]['type'],$array[$i]['year'],$array[$i]['power'],$array[$i]['frontalPhoto'],$array[$i]['lateralPhoto'],$array[$i]['freePhoto'],$array[$i]['cc']);
            array_push($result, $motos);
        }
        return $result;
    }

    public function printC(){
        $cars = $this->genCars();
        $result = "";
        for ($i = 0; $i<sizeof($cars);$i++){
            $result += "<div class='product'><div class='imgP'><img src='".$cars[$i]->getFrontalPhoto()."'></div>";
            $result += "<div class='nameP'><h3>".$cars[$i]->getName()."</h3></div>";
            $result += "<div class='brandP'><h4>Marca: ".$cars[$i]->getBrand()."</h4></div>";
            $result += "<div class='typeP'><h4>Tipo: ".$cars[$i]->getType()."</h4></div>";
            $result += "<div class='colorP'><h4>Color: ".$cars[$i]->getColor()."</h4></div>";
            $result += "<div class='kmP'><h4>Kilómetros: ".$cars[$i]->getKilometers()."</h4></div>";
            $result += "<div class='yearP'><h4>Año Matriculación: ".$cars[$i]->getYear()."</h4></div>";
            $result += "<div class='powerP'><h4>Potencia: ".$cars[$i]->getPower()."</h4></div>";
            $result += "<div class='prizeP'><h3>Precio: ".$cars[$i]->getPrize()."</h3></div>";
            $result += "</div>";
        }
        return $result;
    }

    public function printM(){
        $motos = $this->genMotos();
        $result = "";
        for ($i = 0; $i<sizeof($motos);$i++){
            $result += "<div class='product'><div class='imgP'><img src='".$motos[$i]->getFrontalPhoto()."'></div>";
            $result += "<div class='nameP'><h3>".$motos[$i]->getName()."</h3></div>";
            $result += "<div class='brandP'><h4>Marca: ".$motos[$i]->getBrand()."</h4></div>";
            $result += "<div class='typeP'><h4>Tipo: ".$motos[$i]->getType()."</h4></div>";
            $result += "<div class='colorP'><h4>Color: ".$motos[$i]->getColor()."</h4></div>";
            $result += "<div class='kmP'><h4>Kilómetros: ".$motos[$i]->getKilometers()."</h4></div>";
            $result += "<div class='yearP'><h4>Año Matriculación: ".$motos[$i]->getYear()."</h4></div>";
            $result += "<div class='ccP'><h4>Cilindrada: ".$motos[$i]->getCc()."</h4></div>";
            $result += "<div class='powerP'><h4>Potencia: ".$motos[$i]->getPower()."</h4></div>";
            $result += "<div class='prizeP'><h3>Precio: ".$motos[$i]->getPrize()."</h3></div>";
            $result += "</div>";
        }
        return $result;
    }
}