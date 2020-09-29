<?php

//iniciando a sessão normalmente session_start();

//iniciando a sessão pelo arquivo de configuração:

require_once("config.php");

//apaga a variável de sessão:

session_unset();

$_SESSION["nome"] = "Hcode";

//tira o usuário do site:
session_destroy();

?>