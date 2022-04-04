function selectorDeVenta(){
    let selector = document.getElementById("sellSelector").value;
    let car = document.getElementById("sellCar");
    let moto = document.getElementById("sellMoto");

    if (selector == 1){
        car.style.display = "block";
        moto.style.display = "none";
    }else if (selector == 2){
        moto.style.display = "block";
        car.style.display = "none";
    }else{
        car.style.display = "none";
        moto.style.display = "none";
    }
}