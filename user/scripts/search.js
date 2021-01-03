function searchPlanner(searchText) {
    var nameValue = searchText.value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.status == 200 && this.readyState == 4) {
            document.getElementById("result").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "../views/searchplannerprofile.php?service_name=" + nameValue, true);
    xhr.send()
}