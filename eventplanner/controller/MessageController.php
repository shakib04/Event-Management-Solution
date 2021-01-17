<?php
require_once "../model/database-conn.php";

function getChatList()
{
    $sql = "select DISTINCT sender from messages where receiver = '" . $_SESSION['username'] . "'";
    $data = getColumsValue($sql);
    return $data;
}

function getMessages($receiver, $sender)
{
    $sql = "SELECT * FROM `messages` WHERE receiver = '" . $receiver . "' and sender = '$sender' ORDER by m_time;";
    $data = getColumsValue($sql);
    return $data;
}
