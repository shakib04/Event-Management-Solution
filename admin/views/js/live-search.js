//search user by name

function searchUser(searchInput) {
    var nameValue = searchInput.value;
    var type = document.getElementById("type").innerHTML;
    //console.log(nameValue + " " + type);
    if (type == "planner") {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xhr.open("GET", "search-planner.php?name=" + nameValue + "&type=" + type, true);
        xhr.send();

    } else if (type == "user") {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xhr.open("GET", "search-user.php?name=" + nameValue + "&type=" + type, true);
        xhr.send();
    }
}