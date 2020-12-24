<style>
    .search-user {
        width: 70%;
        padding: 5px;
    }

    .search-button {
        padding: 5px;
        cursor: pointer;
    }
</style>

<form action="">
    <input type="text" placeholder="Search Here" onkeyup="searchUser(this)" class="search-user">
    <input type="submit" value="Search" class="search-button">
</form> <br>
<div id="result"></div>
<script src="js/live-search.js"></script>