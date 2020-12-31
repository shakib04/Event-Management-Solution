function getElement(id){
    return document.getElementById(id);
}

function doBookEventValidation(){
    refreshBookEVent();
    var hasError=false;
	var price=getElement("price");
    var comment=getElement("comment");
    var err_price=getElement("err_price");
	var err_comment=getElement("err_comment");
	
	
	if(price.value==""){
        hasError=true;
        err_price.innerHTML="*Price Required";
        err_price.focus();
    }
	if(comment.value==""){
        hasError=true;
        err_comment.innerHTML="*Comment Required";
        err_comment.focus();
    }
	
    return !hasError;
}
   function refreshBookEvent(){
	var err_price=getElement("err_price");
	var err_comment=getElement("err_comment");
	err_price.innerHTML = "";
	err_comment.innerHTML = "";
	
	
}

