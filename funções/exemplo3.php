<?php


//variaveis que não tem um valor padrão se coloca primeiro
  
function ola($texto = "mundo", $periodo="Bom dia!"){

	return "Olá $texto! $periodo <br>";  

}

echo ola("", "Bom dia");
echo ola();
echo ola("Gustavo", "Boa tarde");
echo ola("Mariana", "Boa noite");

?>