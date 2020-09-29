<?php

include "exemplo1.php";

//require_once para chamar o arquivo apenas uma vez

$resultado = somar(10, 20);

echo $resultado;

//diferença entre include e require:
//require obriga que o arquivo exista e que esteja funcionando corretamente, se caso não funcionar ele para o código
//include tenta funcionar mesmo que o arquivo nao exista 
//include remoto (de um site)

?>