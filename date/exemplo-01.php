<?php  

// definindo data e hora
echo date("H:i:s d/m/Y");

echo "<br>";

// string para datetime
$ts = strtotime("07/06/2022");

echo date("l, d/m/Y", $ts);

echo "<br>";

// setlocale
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B"));

?>