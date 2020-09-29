<?php

$a = 10;

function trocavalor(&$a){

	$a += 50;

	return $a;

}

echo trocavalor($a);

echo"<br>";

echo trocavalor($a);

echo"<br>";

echo $a;

//colocar o & ao lado da variável siginifica passagem de parâmetro por referência, o que acontecer na funcão irá alterar a variável

//oq acontece na função só fica na função

?>