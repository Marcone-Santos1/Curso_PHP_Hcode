<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$header = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($header, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file ,implode(",", $header) . "\r\n");

foreach ($usuarios as $row) {
	
	$data = array();

	foreach ($row as $key => $value) {
		
		array_push($data, $value);

	}

	fwrite($file, implode(",", $data) . "\r\n");

}

fclose($file);


?>