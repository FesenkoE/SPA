<?php
$name = htmlspecialchars(strip_tags($_POST['name']));
$email = htmlspecialchars(strip_tags($_POST['email']));
$phone = htmlspecialchars(strip_tags($_POST['phone']));
$subscribe = htmlspecialchars(strip_tags($_POST['subscribe']));

if ($subscribe) {
    $subscribe = "אני מסכים להירשם כמנוי";
}

$message = $name . " :את השם"  . "\r\n" . $phone . " :טלפון" . "\r\n" . $subscribe;

$message = wordwrap($message, 100, "\r\n");

mail('your@email', '!סדר', $message);

echo ' <script language="JavaScript"> window.location.href = "index.html"</script> ';
?>
