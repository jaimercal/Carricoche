const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const error = urlParams.get("error");
if (error === "emptyinput") {
    alert("Debes llenar todos los campos");
}else if (error === "notloged"){
    alert("Debes iniciar sesion");
}

function validateC(){
    let name = document.forms['sellCarForm']['sellCName'].value;
    let brand = document.forms['sellCarForm']['sellCBrand'].value;
    let price = document.forms['sellCarForm']['sellCPrice'].value;
    let kilometers = document.forms['sellCarForm']['sellCKilometers'].value;
    let color = document.forms['sellCarForm']['sellCColor'].value;
    let type = document.forms['sellCarForm']['sellCType'].value;
    let year = document.forms['sellCarForm']['sellCYear'].value;
    let power = document.forms['sellCarForm']['sellCPower'].value;
    let frontalPhoto = document.forms['sellCarForm']['sellCImagesF'].value;
    let lateralPhoto = document.forms['sellCarForm']['sellCImagesLa'].value;
    let freePhoto = document.forms['sellCarForm']['sellCImagesLi'].value;
    let valid = true;

    if(name==null || name==""){
        valid = false;
        console.log("Error name vacio");
        alert("Debes introducir el modelo del coche");
    }else if(brand==null || brand==""){
        valid = false;
        console.log("Error brand vacio");
        alert("Debes introducir la marca del coche");
    }else if(price==null || price==""){
        valid = false;
        console.log("Error price vacio");
        alert("Debes introducir el precio de venta");
    }else if(kilometers==null || kilometers==""){
        valid = false;
        console.log("Error kilometers vacio");
        alert("Debes introducir el kilometraje");
    }else if(color==null || color==""){
        valid = false;
        console.log("Error color vacio");
        alert("Debes introducir el color");
    }else if(type==null || type==""){
        valid = false;
        console.log("Error type vacio");
        alert("Debes introducir el tipo de coche");
    }else if(year==null || year==""){
        valid = false;
        console.log("Error year vacio");
        alert("Debes introducir el año de matriculacion");
    }else if(power==null || power==""){
        valid = false;
        console.log("Error power vacio");
        alert("Debes introducir la potencia del coche");
    }else if(freePhoto==null || freePhoto==""){
        valid = false;
        console.log("Error foto vacia");
        alert("Debes introducir las fotos indicadas");
    }else if(frontalPhoto==null || frontalPhoto==""){
        valid = false;
        console.log("Error foto vacia");
        alert("Debes introducir las fotos indicadas");
    }else if(lateralPhoto==null || lateralPhoto==""){
        valid = false;
        console.log("Error foto vacia");
        alert("Debes introducir las fotos indicadas");
    }
    if(valid==true){
        document.sellCarForm.submit();
    }
}