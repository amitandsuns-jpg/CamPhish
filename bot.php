<?php
$token = "YAHAN_APNA_BOT_TOKEN";
$chat_id = "YAHAN_APNA_CHAT_ID";

if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$msg";
    file_get_contents($url);
}
?>
