<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Miodrag Novakovic</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<?php
$field_name = $_POST['cf_name'];

$field_email = $_POST['cf_email'];

$field_message = $_POST['cf_message'];

$mail_to = 'miodrag.novakovic1@gmail.com';
$subject = 'Nova poruka od '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Hvala na poslanoj poruci. Kontaktirati ćemo vas uskoro.');
		window.location = 'kontakt.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Poruka nije poslana. Pošaljite email na "miodrag.novakovic1@gmail.com" ');
		window.location = 'kontakt.html';
	</script>
<?php
}
?>