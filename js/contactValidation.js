const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const error = urlParams.get("error");
if (error === "emptyinput"){
    alert("Debes llenar todos los campos");
}else if(error === "invalidemail"){
    alert("El email ingresado no es válido");
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
 * @author Jrc
 */
function validateContact(){
    let email = document.forms['contactForm']['cEmail'].value;
    let commentary = document.forms['contactForm']['cCommentary'].value;
    let valid = true;

    if(email==null || email==""){
        valid = false;
        console.log("Error email vacio");
        alert("Debes introducir un email");
    }else if(commentary==null || commentary==""){
        valid = false;
        console.log("Error comentario vacio");
        alert("Debes introducir un comentario");
    }else if(!validateEmail(email.trim())){
        valid = false;
        console.log("Error al validar email");
        alert("Debes introducir un email valido");
    }
    if(valid==true){
        document.contactForm.submit();
    }
}