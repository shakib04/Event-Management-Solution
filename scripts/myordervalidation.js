function getElement(id){
    return document.getElementById(id);
}

function doOrderValidation(){
    refreshOrder();
    var hasError=false;
	var account=getElement("account");
    var eventdate=getElement("eventdate");
    var bookedby=getElement("bookedby");
    var phone=getElement("phone");
	var address=getElement("address");
	var email=getElement("email");
	var deposit=getElement("deposit");
    var err_account=getElement("err_account");
	var err_eventdate=getElement("err_eventdate");
	var err_bookedby=getElement("err_bookedby");
	var err_phone=getElement("err_phone");
	var err_address=getElement("err_address");
    var err_email=getElement("err_email");
	var err_deposit=getElement("err_deposit");
    
	
	
	if(account.value==""){
        hasError=true;
        err_account.innerHTML="*Account Required";
        err_account.focus();
    }
	if(eventdate.value==""){
        hasError=true;
        err_eventdate.innerHTML="*Event Date Required";
        err_eventdate.focus();
    }
	if(bookedby.value==""){
        hasError=true;
        err_bookedby.innerHTML="*Booked by Required";
        err_bookedby.focus();
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
	if(deposit.value==""){
        hasError=true;
        err_deposit.innerHTML="*Deposit Required";
        err_deposit.focus();
    }
   
    return !hasError;
}
function refreshOrder(){
	var err_account=getElement("err_account");
	var err_eventdate=getElement("err_eventdate");
	var err_bookedby=getElement("err_bookedby");
	var err_phone=getElement("err_phone");
	var err_address=getElement("err_address");
    var err_email=getElement("err_email");
	var err_deposit=getElement("err_deposit");
    
	err_account.innerHTML = "";
	err_eventdate.innerHTML = "";
	err_bookedby.innerHTML = "";
	err_phone.innerHTML = "";
	err_address.innerHTML = "";
	err_email.innerHTML = "";
	err_deposit.innerHTML = "";
    
	
}

