<form method="POST">
	<label>CEP</label>
	<input type="CEP" name="cep">
	<button type="submit">Enviar</button>
</form>


<?php 

if ($_SERVER['REQUEST_METHOD'] === "POST") {

	$cep = $_POST["cep"];

	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$response = curl_exec($ch);

	curl_close($ch);

	$data = json_decode($response, true);

	print_r($data);

}

?>