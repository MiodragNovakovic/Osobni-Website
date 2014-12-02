<?



$host = "Host ime";

$user = "Unesite username";

$pass = "Lozinka";

$db   = "Ime dB";



$ms = mysql_pconnect($host, $user, $pass);

if ( !$ms )

{

echo "Error connecting to database.\n";

}



mysql_select_db($db);

?>