<script language="JavaScript">

	function mascara(t, mask){
		var i = t.value.length;
		var saida = mask.substring(1,0);
		var texto = mask.substring(i)	
		if (texto.substring(0,1) != saida){

			t.value += texto.substring(0,1);	
 		
		}
 	}
 </script>

<form method="POST">
	<label>CEP</label>
	<input type="text" onkeypress="mascara(this, '#####-###')" name="cep">
	<button type="submit">Enviar</button>
</form>


<?php 

if (!empty($_POST['cep'])) {

	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		$cep = $_POST["cep"];
	
		$link = "https://viacep.com.br/ws/$cep/json/";
	
		$ch = curl_init($link);
	
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	
		$response = curl_exec($ch);
	
		curl_close($ch);
	
		$data = json_decode($response, true);

		?>

		
		<form>
			<label>RUA</label>
			<input type="CEP" name="cep" value="<?php print_r($data['logradouro']) ?>" readonly>
			<label>BAIRRO</label>
			<input type="CEP" name="cep" value="<?php print_r($data['bairro']) ?>" readonly>
			<label>CIDADE</label>
			<input type="CEP" name="cep" value="<?php print_r($data['localidade']) ?>" readonly>
			<label>ESTADO</label>
			<input type="CEP" name="cep" value="<?php print_r($data['uf']) ?>" readonly>
		</form>

		<?php

	}

} else {

	echo "Insira um CEP";

}

?>