<?php

function ola($texto = "Mundo", $periodo = "Bom dia"){

    return "Olá $texto, $periodo";

}

echo ola();
echo "<br>";
echo ola("Marcone");
echo "<br>";
echo ola("Chapa", "Boa Noite");
echo "<br>";