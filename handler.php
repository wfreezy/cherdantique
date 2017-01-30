<?php
if (isset($_REQUEST['ok'])) {
 
    $string = '<p>'.$_REQUEST['username'].'<br>'.$_REQUEST['msg'];
    file_put_contents('1.txt', $string, FILE_APPEND);
    header("Location: /отправкасмс.php");
    exit();
}
include ('1.txt');
?>
