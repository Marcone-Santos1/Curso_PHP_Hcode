<?php  

function test($callBack){

	// processo lento

	$callBack();

}

test(function(){
	echo "terminou!";
});

echo "<br>";

$fn = function ($a)
{
	var_dump($a);
}; 

$fn("oi"); 

?>