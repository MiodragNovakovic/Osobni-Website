<?php
session_start();
$host=""; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$databasee=""; // Database name 
$tbl_name=""; // Table name

$username="";
$password="";
$database="";

mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM dbUsers";
$result=mysql_query($query);

$num=mysql_numrows($result);


mysql_close();
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Miodrag Novakovic</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script>
function validateForm()
{
var x=document.forms["myForm"]["ime"].value;
if (x==null || x=="")
  {
  alert("Niste unjeli ime");
  return false;
  }
  var x=document.forms["myForm"]["prezime"].value;
if (x==null || x=="")
  {
  alert("Niste unjeli prezime");
  return false;
  }
  var x=document.forms["myForm"]["username"].value;
if (x==null || x=="")
  {
  alert("Niste unjeli nadimak");
  return false;
  }
  var x=document.forms["myForm"]["password"].value;
if (x==null || x=="")
  {
  alert("Niste unjeli lozinku");
  return false;
  }
  var x=document.forms["myForm"]["email"].value;
if (x==null || x=="")
  {
  alert("Niste unjeli Email");
  return false;
  }
}
</script>
</head>
<body>
<!--header-->
<div align="center" style="border-bottom:solid 1px #D2D1DC">
<div class="top_header_1">

<div class="header_names_left_div">
<div class="header_ime_top_div">Miodrag</div>
<div class="header_prezime_bott_div">Novakovic</div>
</div>
<div class="header_menubar_div_okvir">
<table width="99%" border="0">
<tr>
<td height="57">
<a class="header_menubar_button1"  href="index.html">NASLOVNA</a>
</td>
<td><a class="header_menubar_button1"  href="fakultet.html">FAKULTET</a></td>
    <td><a class="header_menubar_button1"  href="privatno.html">PRIVATNO</a></td>
    <td><a class="header_menubar_button1"  href="zivotopis.html">ŽIVOTOPIS</a></td>
    <td><a class="header_menubar_button1"  href="kontakt.html">KONTAKT</a></td>
    <td><a class="header_menubar_button1"  href="registar.php">REGISTAR</a></td>
  </tr>
</table>

</div>
</div>
</div>
<!--header kraj-->


<div align="center" class="header_mid">
<div style="width:960px">
  <span class="registar_mid_naslov_posta">Registracija i registrirani korisnici </span>
  <div style="clear:both"></div>
  </div>
    <div class="registar_mid_div1">
      <div class="registar_div_forma_ljevo1">
      
      <form action="register.php"  name="myForm" onSubmit="return validateForm()" method="post" >




<table width="97%" border="0">
<tr>
    <td width="60%" align="left" valign="top"><label for="name">Ime</label></td>
    <td width="40%" align="left" valign="top"><input type="text" name="ime"  size="20" /></td>
  </tr>
<tr>
    <td width="60%" align="left" valign="top"><label for="name">Prezime</label></td>
    <td width="40%" align="left" valign="top"><input type="text" name="prezime"  size="20" /></td>
  </tr>
  <tr>
    <td width="60%" align="left" valign="top"><label for="name">Nickname</label></td>
    <td width="40%" align="left" valign="top"><input type="text" name="username" size="20" /></td>
  </tr>
  <tr>
     <td width="60%" align="left" valign="top"><label for="name">Lozinka</label></td>
    <td width="40%" align="left" valign="top"><input type="text" name="password"  size="20" /></td>
  </tr>
  <tr>
     <td width="60%" align="left" valign="top"><label for="name">Email</label></td>
    <td width="40%" align="left" valign="top"><input type="text" name="email"  size="20" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"></td>
    <td align="left" valign="top"></td>
  </tr>
  <tr>
    <td> <button style="padding:8px" type="submit">Potvrdi</button></td>
    <td>&nbsp;</td>
  </tr>
</table>

      </form>
      
      </div>
      
      
      <div class="registar_registrirani_korisnici_div1">
        <table style="border-bottom:solid 1px #D2D1DC" width="96%" border="0" cellpadding="0" cellspacing="2">
  <tr>
  <td width="32%" align="left" style="padding-bottom:10px;"><strong>Ime</strong></td>
            <td style="padding-bottom:10px;" width="35%" align="left"><strong>Prezime</strong></td>
          <td width="33%" style="padding-bottom:10px;" align="left"><strong>Email</strong></td>
</tr>
</table>
 
<table style="font-size:12px" width="96%" border="0">
 <?php
$i=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"username");
$f2=mysql_result($result,$i,"ime");
$f3=mysql_result($result,$i,"prezime");
$f4=mysql_result($result,$i,"email");
?>
<tr>
<td width="32%" align="left" valign="top"><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td width="35%" align="left" valign="top"><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
<td width="33%" align="left" valign="top"><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
</tr>


<?php
$i++;
}
?>


</table>


      </div>
    
    <div style="clear:both"></div>
    </div>

<div style="clear:both"></div>
</div>
<div style="clear:both"></div>
</div>
<div style="clear:both"></div>
</div>

<!--obavijesti kraj-->

</body>
</html>
