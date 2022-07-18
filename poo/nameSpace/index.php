<?php

require_once("config.php");

use cliente\Cadastro;


$cad = new Cadastro();

$cad->setNome("Marcone");
$cad->setEmail("Maruko@gmail.com");
$cad->setSenha("123456789");

$cad->registrarVenda();

// echo "<br>".$cad;
