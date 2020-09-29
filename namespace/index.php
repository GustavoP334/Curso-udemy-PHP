<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Gustavo Passos");
$cad->setEmail("GustavoPassos@email.com");
$cad->setSenha("vinteset");

$cad->registrarVenda();


?>