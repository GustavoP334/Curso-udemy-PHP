<?php

$a = 30;
$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

//apenas um igual (=) significa atribuição
//dois iguais (==) significam comparação
//três iguais (===) conpara igualdade e identidade por exemplo se o número for 55.0
$c = 55.0;

var_dump($c === $b);

echo "<br>";
//eles não são identicos? ahhh eles não sao identicos (par isso aparace true!!)
var_dump($b != $c);

echo "<br>";

var_dump($a !== $b);

?>
