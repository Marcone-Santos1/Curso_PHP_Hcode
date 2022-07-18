<?php  

// declaração de tipos em uma função e do seu retorno
function soma(float ...$valores):float {


	return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(5, 2.5);
echo "<br>";

?>