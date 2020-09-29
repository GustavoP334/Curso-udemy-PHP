<?php

//json_encode transforma o array em json

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Gustavo',
	'idade'=>19
));

echo json_encode($pessoas);

?>