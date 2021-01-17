<?php
require_once "session.php";
require_once "nav-bar.php";
require_once "../controller/MessageController.php";

$chatPersonList = [];

$chatData = getChatList();

foreach ($chatData as $chat) {
    $chatPersonList[] = $chat['sender']; 
}

echo "<pre>";
//print_r($chatPersonList);
echo "</pre>";


?>

//design a inbox

<div id="chatList">
<?php 
foreach ($chatPersonList as $sender) {
    echo "<h1>Message From:<u>". $sender . "</u></h1>";
    $allMessage = getMessages($_SESSION['username'],$sender);
    foreach ($allMessage as $message) {
        echo $message['message'] . "<br>";
    }
}
?>
</div>