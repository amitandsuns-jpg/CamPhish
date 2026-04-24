<?php
$token = "8529825431:AAGjNwCTOvE02f7uLtozj_ku89FO4AkuPts";
$chat_id = "-1003822570114";

if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$msg";
    file_get_contents($url);
}
?>
