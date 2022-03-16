function validateEmail(email){
    console.log("Validando email")
    let valid = false;
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        valid = true;
    }else{
        valid = false;
    }
    return valid;
}

function validate(){
    let email = document.forms['contactForm']['email'].value;
    let commentary = document.forms['contactForm']['commentary'].value;

    if(email==NULL || email==""){
        return false;
    }else if(commentary==NULL || commentary==""){
        return false;
    }else if(validateEmail(email)){
        return false;
    }
    
}