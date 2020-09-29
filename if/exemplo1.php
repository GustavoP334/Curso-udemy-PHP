<?php


$result = 125;

$idade = 12;

$idademaior = 18;

$idadevelha = 65;

if ($result < $idade){
	echo "Você é criança";

} elseif ($result < $idademaior){
	echo "Você é adolescente";

} else if ($result < $idadevelha){
	echo "Você é adulto";  

}  else {
	echo "Você é senhor(a) de idade"; 

}

//operador ternário:
echo "<br>";

echo ($result < $idademaior)?"Menor de idade": "Maior de idade";

?>