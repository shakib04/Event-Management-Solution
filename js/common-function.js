//check empty
function isempty(str) {
    if (str == "") {
        return true;
    }
    return false;
}

//check any number contains in string
function checkNumberContains(str) {
    for (let index = 0; index < str.length; index++) {
        let s = str[index];
        if (s == "1" || s == "2" || s == "3" || s == "4" || s == "5" || s == "6" || s == "7" || s == "8" || s == "9" || s == "0") {
            return true;
        }
    }

    return false;

}

//get by id
function getElement(id) {
    return document.getElementById(id);
}