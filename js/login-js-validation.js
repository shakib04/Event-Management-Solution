var err_lg_username = getElement("err_lg_username");
var err_lg_password = getElement("err_lg_password");

function lg_refresh() {
    err_lg_username.innerHTML = "";
    err_lg_password.innerHTML = "";
}

function loginValidation() {
    lg_refresh();
    var hasError = false;
    let username = getElement("lg_username").value;
    let password = getElement("lg_password").value;

    //username validation
    if (isempty(username)) {
        hasError = true;
        err_lg_username.innerHTML = "This Field is Empty";
    }
    //password
    if (isempty(password)) {
        hasError = true;
        err_lg_password.innerHTML = "This Field is Empty";
    }
    return !hasError;
}