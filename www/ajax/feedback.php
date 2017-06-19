<?php
$name = htmlspecialchars($_POST['name']); //С этой функцией не будет реагировать на html-теги.
$email = htmlspecialchars($_POST['email']);
//Sending...
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=UTF-8\r\n"; //Заголовки.
if (mail("wfabrique@gmail.com", $name, $email, $headers)) { //Проверяет, отправленно ли сообщение.
  echo "Сообщение отправлено";
} else {
  echo "Сообщение не отправлено";
}
 ?>
