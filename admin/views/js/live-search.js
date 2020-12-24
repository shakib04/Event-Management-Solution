//search user by name

function searchUser(searchInput) {
    var nameValue = searchInput.value;
    var type = document.getElementById("type").innerHTML;
    //console.log(nameValue + " " + type);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.status == 200 && this.readyState == 4) {
            document.getElementById("result").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "search-user.php?name=" + nameValue + "&type=" + type, true);
    xhr.send();
}