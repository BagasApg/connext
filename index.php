<?php

require "config.php";

$result = mysqli_query($conn, "SELECT * FROM chats");

$chats = [];
while ($chatAssoc = mysqli_fetch_object($result)) {
    $chats[] = $chatAssoc;
}
$date = date('M', time());
// dd($date);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discord | Chats</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">

        <?php foreach ($chats as $chat) : ?>
            <div class="chat-bubble">
                <div class="bubble-head">
                    <p class="bubble-user"><?= $chat->sent_from ?></p>
                    <p class="bubble-sent-at"><?= date('M j Y g:i A', strtotime($chat->sent_at)) ?></p>
                </div>
                <p class="bubble-text"><?= $chat->chat ?></p>
            </div>
        <?php endforeach; ?>

        <div class="texting-container">
            <form action="send_chat.php" method="post">
                <div class="texting-group">

                    <input class="texting-input" type="text" name="chat">
                    <input type="hidden" name="sent_from" id="sent_from" value="ennie">
                    <button class="texting-button" type="submit" name="send">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>