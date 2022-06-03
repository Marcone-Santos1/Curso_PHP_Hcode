<?php  

$json = '[{"Nome":"Marcone","Idade":18},{"Nome":"Lucas","Idade":22},{"Nome":"Marcos","Idade":16},{"Nome":"Kelly","Idade":14},{"Nome":"Luana","Idade":19}]';

$data = json_decode($json, true);

var_dump($data);

?>