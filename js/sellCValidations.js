const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const error = urlParams.get("error");
if (error === "emptyinput") {
    alert("Debes llenar todos los campos");
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
    }
    if(valid==true){
        document.sellCarForm.submit();
    }
}