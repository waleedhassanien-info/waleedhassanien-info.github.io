<?php
$toEmail = "waleedhassanien@gmail.com";
$subject = $_POST["subject"];
$mailHeaders = "From:". $_POST["userEmail"] .">\r\n";
$message = "Name: ".$_POST["userName"].", \r\nEmail: ".$_POST["userEmail"].", \r\nPhone: ".$_POST["phone"].",  \r\nSubject: ".$_POST["subject"].", \r\nMessage: ".$_POST["message"];
if(mail($toEmail, $subject, $message, $mailHeaders)) {
print "<p class='success'>Your message has been sent. Thank you!</p>";
} else {
print "<p class='Error'>Error</p>";
}
?>