const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const error = urlParams.get("error");
if (error === "emptyinput"){
    alert("Debes llenar todos los campos");
}else if(error === "invalidemail"){
    alert("El email ingresado no es válido");
}else if(error === "invalidpassword"){
    alert("La contraseña ingresada no es válida");
}else if(error === "invalideusername"){
    alert("El usuario ingresado no es válido");
}else if(error === "existingusername"){
    alert("El usuario ingresado ya existe");
}else if(error === "passwordmatch"){
    alert("Las contraseñas no coinciden");
}
/**
 * @author Jrc
 * @param email
 * @returns {boolean}
 */
function validateEmail(email){
    console.log("Validando email")
    let valid = false;
    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        valid = true;
    }else{
        valid = false;
    }
    return valid;
}

/**
 *
 * @param email
 * @param name
 * @param surname
 * @param username
 * @param address
 * @param password
 * @param passwordRep
 * @returns {boolean}
 */
function emptyInput(email, name, surname, username, address, password, passwordRep){
    let valid = false;

    if(email==null || email==""){
        valid = false;
    }else if(name==null || name==""){
        valid = false;
    }else if(surname==null || surname==""){
        valid = false;
    }else if(username==null || username==""){
        valid = false;
    }else if(address==null || address==""){
        valid = false;
    }else if(password==null || password==""){
        valid = false;
    }else if(passwordRep==null || passwordRep==""){
        valid = false;
    }else{
        valid = true;
    }
    return valid;
}

/**
 *
 * @param password
 * @returns {boolean}
 */
function validatePassword(password){
    let valid = false;

    if(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}$/.test(password)){
        valid = true;
    }else{
        valid = false;
    }
    return valid;
}

/**
 *
 * @param password
 * @param passwordRep
 * @returns {boolean}
 */
function passwordMatch(password, passwordRep){
    let valid = false;

    if(password!==passwordRep){
        valid = false;
    }else{
        valid = true;
    }
    return valid;
}

/**
 *
 * @param username
 * @returns {boolean}
 */
function validateUsername(username){
    let valid = false;

    if(/^[a-zA-Z]+$/.test(username)){
        valid = false;
    }else{
        valid = true;
    }
    return valid;
}

/**
 * @author Jrc
 */
function validateSignup(){
    let email = document.forms['signupForm']['sEmail'].value;
    let name = document.forms['signupForm']['sName'].value;
    let surname = document.forms['signupForm']['sSurname'].value;
    let username = document.forms['signupForm']['sUsername'].value;
    let address = document.forms['signupForm']['sAddress'].value;
    let password = document.forms['signupForm']['sPassword'].value;
    let passwordRep = document.forms['signupForm']['sPasswordRep'].value;

    let valid = true;

    if(!emptyInput(email, name, surname, username, address, password, passwordRep)){
        valid = false;
        console.log("Error campo vacio");
        alert("Debes rellenar todos los campos");
    }else if(!validateEmail(email.trim())){
        valid = false;
        console.log("Error al validar email");
        alert("Debes introducir un email válido");
    }else if(!passwordMatch(password, passwordRep)){
        valid = false;
        console.log("Error al comprobar contraseñas");
        alert("Las contraseñas deben coincidir");
    }else if(!validateUsername(username)){
        valid = false;
        console.log("Error al validar usuario");
        alert("Debes introducir un usuario válido");
    }else if(!validatePassword(password)){
        valid = false;
        console.log("Error al validar contraseña");
        alert("Debes introducir una contraseña válida");
    }
    if(valid==true){
        document.signupForm.submit();
    }
}