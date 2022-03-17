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
    let valid = true;

    if(email==NULL || email==""){
        valid = false;
    }else if(commentary==NULL || commentary==""){
        valid = false;
    }else if(validateEmail(email)){
        valid = false;
    }
    if(valid==true){
        document.contactForm.submit();
    }
    
}