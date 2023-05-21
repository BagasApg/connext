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
        <div class="channels-container">
            hi
        </div>
        <div class="chats-container">
            <div class="header">
                <p class="text-clear">Chat</p>
                <img src="svgs/users.svg" alt="">
            </div>
            <div class="chats">
                <?php if ($result->num_rows > 0) : ?>
                    <?php $saveNow = null; ?>
                    <?php foreach ($chats as $chat) : ?>
                        <?php
                        $now = date('i', strtotime($chat->sent_at));
                        // if ($saveNow != $now) {
                        //     var_dump($saveNow);
                        // }
                        $sent_at = date('g:i A', strtotime($chat->sent_at));
                        if (intval(date('j', strtotime($chat->sent_at))) == intval(date('j', time())) - 1) {
                            $when = "Yesterday at " . $sent_at;
                        } else if (intval(date('j', strtotime($chat->sent_at))) == intval(date('j', time()))) {
                            $when = "Today at " . $sent_at;
                        } else {
                            $when = date('l, m-Y g:i A', strtotime($chat->sent_at));
                        } ?>
                        <?php if ($saveNow != $now) : ?>
            </div>
            <div class="chat-bubble">
                <div class="bubble-head">
                    <p class="bubble-user"><?= $chat->sent_from ?></p>
                    <p class="bubble-sent-at"><?= $when ?></p>
                </div>
            <?php endif; ?>

            <p class="bubble-text"><?= $chat->chat . $saveNow ?></p>
            <?php $saveNow = $now; ?>


        <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="no-chats">
                <p>It is empty for now.</p>
                <p>Start chatting!</p>
            </div>
        <?php endif; ?>
        </div>


        <div class="texting-container">
            <form action="send_chat.php" method="post">
                <div class="texting-group">

                    <input autocomplete="off" class="texting-input" type="text" name="chat" placeholder="Message here..">
                    <input type="hidden" name="sent_from" id="sent_from" value="epilepsi">
                    <button class="texting-button" type="submit" name="send">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="users-container">
        slebeww
    </div>
    </div>
</body>

</html>