if (error === "emptyinput") {
    alert("Debes llenar todos los campos");
}else if (error === "notloged"){
    alert("Debes iniciar sesion");
}

function validateM(){
    let name = document.forms['sellMotoForm']['sellMName'].value;
    let brand = document.forms['sellMotoForm']['sellMBrand'].value;
    let price = document.forms['sellMotoForm']['sellMPrice'].value;
    let kilometers = document.forms['sellMotoForm']['sellMKilometers'].value;
    let color = document.forms['sellMotoForm']['sellMColor'].value;
    let type = document.forms['sellMotoForm']['sellMType'].value;
    let year = document.forms['sellMotoForm']['sellMYear'].value;
    let power = document.forms['sellMotoForm']['sellMPower'].value;
    let cc = document.forms['sellMotoForm']['sellMCC'].value;
    let frontalPhoto = document.forms['sellMotoForm']['sellMImagesF'].value;
    let lateralPhoto = document.forms['sellMotoForm']['sellMImagesLa'].value;
    let freePhoto = document.forms['sellMotoForm']['sellMImagesLi'].value;
    let valid = true;

    if(name==null || name==""){
        valid = false;
        console.log("Error name vacio");
        alert("Debes introducir el modelo de la moto");
    }else if(brand==null || brand==""){
        valid = false;
        console.log("Error brand vacio");
        alert("Debes introducir la marca de la moto");
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
        alert("Debes introducir el tipo de la moto");
    }else if(year==null || year==""){
        valid = false;
        console.log("Error year vacio");
        alert("Debes introducir el año de matriculacion");
    }else if(power==null || power==""){
        valid = false;
        console.log("Error power vacio");
        alert("Debes introducir la potencia de la moto");
    }else if(cc==null || cc==""){
        valid = false;
        console.log("Error cc vacio");
        alert("Debes introducir la cilindrada de la moto");
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
        document.sellMotoForm.submit();
    }
}