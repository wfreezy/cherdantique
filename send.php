<?php 
	// текст сообщения 
	$message = "первая строка\n вторая строка\n третья строка"; 
	// При помощи функции wordwrap() расставляем
	// переносы так, чтобы строки были не длиннее 70 символов 
	$message = wordwrap($message, 70); 
	// отправляем сообщение 
	mail('lilwfreezy@gmail.com', 'Тема', $message); 
?>
