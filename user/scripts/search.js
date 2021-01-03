function searchPlanner(searchText) {
    var nameValue = searchText.value;
    var type = document.getElementById("type").innerHTML;
    if (type == "planner") {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.status == 200 && this.readyState == 4) {
                document.getElementById("search").innerHTML = this.responseText;
            }
        };
        xhr.open("GET", "searchplannerprofile.php?service_name=" + nameValue + "&type=" + type, true);
        xhr.send()
    }
}