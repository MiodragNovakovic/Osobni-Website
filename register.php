<?php
include ("dbConfig.php");
$q = "INSERT INTO `dbUsers` (`ime`,`prezime`,`username`,`password`,`email`) 

"."VALUES (

'".$_POST['ime']."',
'".$_POST['prezime']."',
'".$_POST["username"]."', 
"."PASSWORD('".$_POST["password"]."'), 
"."'".$_POST["email"]."')";

$r = mysql_query($q);
if( !mysql_insert_id() )
{
die("Error: Korisnik nije dodan u bazu podataka.");}
?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hvala na registraciji</title>
<meta http-equiv="refresh" content="4; ">
</head>






<h1>Hvala na registraciji!</h1>
<h3>Biti ćete automatski preusmjereni.</h3>