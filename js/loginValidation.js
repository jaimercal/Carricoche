const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const error = urlParams.get("error");
if (error === "emptyinput"){
    alert("Debes llenar todos los campos");
}else if(error === "usernotexisting"){
    alert("El email o usuario no existen");
}else if(error === "invalidpassword"){
    alert("La contraseña ingresada no es válida");
}else if(error === "incorrectpassword"){
    alert("La contraseña introducida no es correcta");
}

function emptyInput(register, password){
    let valid = false;

    if(register==null || register==""){
        valid = false;
    }else if(password==null || password==""){
        valid = false;
    }else{
        valid = true;
    }
    return valid;
}

function validatePassword(password){
    let valid = false;

    if(/^.{4,}$/.test(password)){
        valid = true;
    }else{
        valid = false;
    }
    return valid;
}

function validateLogin(){
    let register = document.forms['loginForm']['lRegister'].value;
    let password = document.forms['loginForm']['lPassword'].value;

    let valid = true;

    if(!emptyInput(register, password)){
        valid = false;
        console.log("Error campo vacio");
        alert("Debes rellenar todos los campos");
    }else if(!validatePassword(password)){
        valid = false;
        console.log("Error al validar contraseña");
        alert("Debes introducir una contraseña válida");
    }
    if(valid==true){
        document.loginForm.submit();
    }
}