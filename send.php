<?php
$name = htmlspecialchars(strip_tags($_POST['name']));
$email = htmlspecialchars(strip_tags($_POST['email']));
$phone = htmlspecialchars(strip_tags($_POST['phone']));
$subscribe = htmlspecialchars(strip_tags($_POST['subscribe']));

if ($subscribe) {
    $subscribe = "אני מסכים להירשם כמנוי";
}


// Сообщение
$message = $name . " :את השם"  . "\r\n" . $phone . " :טלפון" . "\r\n" . $subscribe;


// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 100, "\r\n");

// Отправляем
mail('fesenkoe2018@gmail.com', '  סדר ! ', $message);

echo ' <script language="JavaScript"> window.location.href = "index.html"</script> ';



?>