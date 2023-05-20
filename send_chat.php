<?php

require "config.php";

if (isset($_POST["send"])) {
    $chat = $_POST["chat"];
    $sent_from = $_POST["sent_from"];

    if (empty($chat)) {
        redirect("index.php");
        die;
    }
    $result = mysqli_query($conn, "INSERT INTO chats(chat, sent_from, sent_at) VALUES('$chat', '$sent_from',now())");
    redirect("index.php");
} else {
    redirect("index.php");
}
