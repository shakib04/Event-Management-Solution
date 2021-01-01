function getElement(id){
    return document.getElementById(id);
}

function doEditProfileValidation(){
    refreshEditProfile();
    var hasError=false;
	var username=getElement("username");
    var fullname=getElement("fullname");
    var email=getElement("email");
    var phone=getElement("phone");
	var address=getElement("address");
    var err_username=getElement("err_username");
	var err_fullname=getElement("err_fullname");
    var err_email=getElement("err_email");
    var err_phone=getElement("err_phone");
	var err_address=getElement("err_address");
	
	if(username.value==""){
        hasError=true;
        err_username.innerHTML="*UserName Required";
        err_username.focus();
    }
    if(fullname.value==""){
        hasError=true;
        err_fullname.innerHTML="*FullName Required";
        err_fullname.focus();
    }
    else if(fullname.search("1")!=-1 && fullname.search("2")!=-1 && fullname.search("3")!=-1 && fullname.search("4")!=-1 && fullname.search("5")!=-1 && fullname.search("6")!=-1 && fullname.search("7")!=-1 && fullname.search("8")!=-1 && fullname.search("9")!=-1 && fullname.search("0")!=-1){
        hasError=true;
        err_fullname.innerHTML="*FullName Cannot Contain Numbers";
        err_fullname.focus();
    }
    if(email.value==""){
        hasError=true;
        err_email.innerHTML="*Email Required";
        err_email.focus();
    }
    else if(email.search("@") && email.length<6){
        hasError=true;
        err_email.innerHTML="*Invalid Email";
        err_email.focus();
    }
    if(phone.value==""){
        hasError=true;
        err_phone.innerHTML="*Phone Required";
        err_phone.focus();
    }
    else if(phone.length!=11){
        hasError=true;
        err_phone.innerHTML="*Invalid Phone";
        err_phone.focus();
    }
	
	if(address.value==""){
        hasError=true;
        err_address.innerHTML="*Address Required";
        err_address.focus();
    }
    return !hasError;
}


function refreshEditProfile(){
	var err_username = getElement("err_username");
	var err_fullname = getElement("err_fullname");
    var err_email = getElement("err_email");
    var err_phone = getElement("err_phone");
	var err_address= getElement("err_address");
	err_username.innerHTML = "";
	err_fullname.innerHTML = "";
	err_email.innerHTML = "";
    err_phone.innerHTML = "";
	err_address.innerHTML = "";
}