<?php

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;

var_dump($resultado);

//comparação se usa var_dump
echo "<br>";

// () = faz primeiro as que estão dentro dos parenteses.
//se apenas a ultima condição for falsa, o resto todo é falso.
//e se a ultima condição for verdadeira, o resto é verdadeiro

$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado2);

//ou uma ou outra "or"
//pelo menos uma é verdadeira
?>