function getElement(id) {
    return document.getElementById(id);
}

var err_name = getElement("erName");
var err_username = getElement("erUsername");
var err_email = getElement("erEmail");
var err_password = getElement("erPassword");
var err_cfpassword = getElement("ercfpassword");
var err_contact = getElement("erContact");
var err_address = getElement("erAddress");
var err_type = getElement("err_Type");
var err_gender = getElement("err_gender");


function refresh() {
    err_name.innerHTML = "";
    err_username.innerHTML = "";
    err_email.innerHTML = "";
    err_password.innerHTML = "";
    err_cfpassword.innerHTML = "";
    err_contact.innerHTML = "";
    err_address.innerHTML = "";
    err_type.innerHTML = "";
    err_gender.innerHTML = "";

}



function regValidation() {
    refresh();
    var hasError = false;
    var fullname = getElement("fullname").value;
    var username = getElement("username").value;
    var password = getElement("password").value;
    var cfpassword = getElement("cfpassword").value;
    var email = getElement("email").value;
    var contact = getElement("contact").value;
    var address = getElement("address").value;


    //fullname validation

    if (isempty(fullname)) {
        hasError = true;
        err_name.innerHTML = "This Field is Empty";
    } else if (checkNumberContains(fullname)) {
        hasError = true;
        err_name.innerHTML = "Number is not allowed";
    }

    //username validation
    if (isempty(username)) {
        hasError = true;
        err_username.innerHTML = "This Field is Empty";
    } else if (username.length < 5 || username.length > 10) {
        hasError = true;
        err_username.innerHTML = "Usename must be 5-10 characters long";
    } else if (username.search(" ") > -1) {
        hasError = true;
        err_username.innerHTML = "Usename can not contain spaces ";
    }

    //password
    if (isempty(password)) {
        hasError = true;
        err_password.innerHTML = "This Field is Empty";
    } else if (password.length <= 7) {
        hasError = true;
        err_password.innerHTML = "Password must be 8 characters long";
    } else if (password.length > 32) {
        hasError = true;
        err_password.innerHTML = "Password must be less than 32 characters";
    } else if (password == password.toUpperCase()) {
        hasError = true;
        err_password.innerHTML = "Password must be 1 LowerCase character";
    } else if (password == password.toLowerCase()) {
        hasError = true;
        err_password.innerHTML = "Password must be 1 Uppercase character";
    }

    //confirm password validation
    if (isempty(cfpassword)) {
        hasError = true;
        err_cfpassword.innerHTML = "This Field is Empty";
    } else if (cfpassword != password) {
        hasError = true;
        err_cfpassword.innerHTML = "Confirm Password does not match";
    }


    //email validation
    if (isempty(email)) {
        hasError = true;
        err_email.innerHTML = "This Field is Empty";
    } else if (email.search("@") == -1) {
        hasError = true;
        err_email.innerHTML = "no @ at email";
    }

    //contact validation
    if (isempty(contact)) {
        hasError = true;
        err_contact.innerHTML = "This Field is Empty";
    } else if (contact.length <= 10 || contact.length > 11) {
        hasError = true;
        err_contact.innerHTML = "Phone must be 11 characters ";
    } else if (parseFloat(contact) != contact) {
        hasError = true;
        err_contact.innerHTML = "Phone must have no alphabet";
    }

    //gender validation

    if (getElement("male_gender").checked != true && getElement("female_gender").checked != true && getElement("others_gender").checked != true) {
        hasError = true;
        err_gender.innerHTML = "Select One";
    }


    //address
    if (isempty(address)) {
        hasError = true;
        err_address.innerHTML = "This Field is Empty";
    } else if (address.length > 200) {
        hasError = true;
        err_address.innerHTML = "Length of address is greater than 200";
    }

    //type validation
    if (getElement("user").checked != true && getElement("planner").checked != true) {
        hasError = true;
        err_type.innerHTML = "Select One";
    }

    return !hasError;
}



function checkDuplicateUser(usernameInput) {
    var username = usernameInput.value;

    if (username.length >= 5 && username.length <= 10) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("duplicate-username").innerHTML = this.responseText;
                console.log(this.responseText);
            }
        };

        xhr.open("GET", "php-codes/registration-validation.php?checkDupliUsername=" + username, true);
        xhr.send();
    } else {
        document.getElementById("duplicate-username").innerHTML = '';
    }
}