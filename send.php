<?php
if (isset($_REQUEST['ok'])) {
 
    $string = '<p>'.$_REQUEST['username'].'<br>'.$_REQUEST['msg'];
    file_put_contents('отправкасмс.txt', $string, FILE_APPEND);
    header("Location: /send.php");
    exit();
}
include ('1.txt');
?>
