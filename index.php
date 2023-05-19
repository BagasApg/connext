<?php

require "config.php";

$result = mysqli_query($conn, "SELECT * FROM chats");

$chats = [];
while ($chatAssoc = mysqli_fetch_object($result)) {
    $chats[] = $chatAssoc;
}
// $date = date('j', strtotime($chats[0]->sent_at));
// $date = 17;
// if($date == intval(date('j', time()))-1){
//     dd("Kemarin " . $date);

// } else {
//     dd("Sekarang " . $date);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connext | Chats</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            Chat
        </div>
        <div class="chats">
            <?php if($result->num_rows > 0): ?>
            <?php foreach ($chats as $chat) : ?>
                <?php 
                $sent_at = date('g:i A', strtotime($chat->sent_at));
                if(intval(date('j', strtotime($chat->sent_at))) == intval(date('j', time()))-1){
                    $when = "Yesterday at " . $sent_at;
                }else if(intval(date('j', strtotime($chat->sent_at))) == intval(date('j', time()))) {
                    $when = "Today at " . $sent_at;
                }else {
                    $when = date('l m Y g:i A', strtotime($chat->sent_at));
                } ?>
                <div class="chat-bubble">
                    <div class="bubble-head">
                        <p class="bubble-user"><?= $chat->sent_from ?></p>
                        <p class="bubble-sent-at"><?= $when ?></p>
                    </div>
                    <p class="bubble-text"><?= $chat->chat ?></p>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
                <div class="no-chats">
                    
                    <p>It is empty for now.</p>
                    <p>Start chatting!</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="texting-container">
            <form action="send_chat.php" method="post">
                <div class="texting-group">

                    <input class="texting-input" type="text" name="chat" placeholder="Message here..">
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