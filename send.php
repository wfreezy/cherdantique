<?php

$message = "Line 1\r\nLine 2\r\nLine 3";

$message = wordwrap($message, 70, "\r\n");


mail('lilwfreezy@gmail.com', 'My Subject', $message);
?>
