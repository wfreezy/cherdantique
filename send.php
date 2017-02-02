<?php 
function clear_data($vvod)
{
return trim(strip_tags($vvod));    
}
$name =  clear_data($_POST['name']);
$email = clear_data($_POST['email']);
$mess = clear_data($_POST[' mess ']);
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
$to = lilwfreezy@gmail.com;
$headers = "Content-type: text/plain; charset = utf-8";
$subject = "Jopa";
$message = "Имя пославшего: $name \nЭлектронный адрес: $email \nСообщение: $mess";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "Спасибо за отправку Вашего сообщения.";
}
else 
{
echo "Сообщение не отправлено. Приносим свои извинения. Видимо сервер не может обработать ваше сообщение, скопируйте этот email lolo4nik@gmail.com и отправьте  из своей почты. ";
}
}
?>
