function getElement(id){
    return document.getElementById(id);
}

function doEditProfileValidation(){
    refreshEditProfile();
    var hasError=false;
	var username=getElement("username");
    var Full_Name=getElement("Full_Name");
    var email=getElement("email");
    var phone_number=getElement("phone_number");
	var full_address=getElement("full_address");
    var err_username=getElement("err_username");
	var err_Full_Name=getElement("err_Full_Name");
    var err_email=getElement("err_email");
    var err_phone_number=getElement("err_phone_number");
	var err_full_address=getElement("err_full_address");
	
	if(username.value==""){
        hasError=true;
        err_username.innerHTML="*UserName Required";
        err_username.focus();
    }
    if(Full_Name.value==""){
        hasError=true;
        err_Full_Name.innerHTML="*FullName Required";
        err_Full_Name.focus();
    }
    else if(Full_Name.search("1")!=-1 && Full_Name.search("2")!=-1 && Full_Name.search("3")!=-1 && Full_Name.search("4")!=-1 && Full_Name.search("5")!=-1 && Full_Name.search("6")!=-1 && Full_Name.search("7")!=-1 && Full_Name.search("8")!=-1 && Full_Name.search("9")!=-1 && Full_Name.search("0")!=-1){
        hasError=true;
        err_Full_Name.innerHTML="*FullName Cannot Contain Numbers";
        err_Full_Name.focus();
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
    if(phone_number.value==""){
        hasError=true;
        err_phone_number.innerHTML="*Phone Required";
        err_phone_number.focus();
    }
    else if(phone_number.length!=11){
        hasError=true;
        err_phone_number.innerHTML="*Invalid Phone";
        err_phone_number.focus();
    }
	
	if(full_address.value==""){
        hasError=true;
        err_full_address.innerHTML="*Address Required";
        err_full_address.focus();
    }
    return !hasError;
}


function refreshEditProfile(){
	var err_username = getElement("err_username");
	var err_Full_Name = getElement("err_Full_Name");
    var err_email = getElement("err_email");
    var err_phone_number = getElement("err_phone_number");
	var err_full_address= getElement("err_full_address");
	err_username.innerHTML = "";
	err_Full_Name.innerHTML = "";
	err_email.innerHTML = "";
    err_phone_number.innerHTML = "";
	err_full_address.innerHTML = "";
}