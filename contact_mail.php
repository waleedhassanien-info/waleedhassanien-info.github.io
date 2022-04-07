<?php
$toEmail = "waleedhassanien@gmail.com";
$subject = $_GET["subject"];
$mailHeaders = "From:". $_GET["userEmail"] .">\r\n";
$message = "Name: ".$_GET["userName"].", \r\nEmail: ".$_GET["userEmail"].", \r\nPhone: ".$_GET["phone"].",  \r\nSubject: ".$_GET["subject"].", \r\nMessage: ".$_GET["message"];
if(mail($toEmail, $subject, $message, $mailHeaders)) {
print "<p class='success'>Your message has been sent. Thank you!</p>";
} else {
print "<p class='Error'>Error</p>";
}
?>