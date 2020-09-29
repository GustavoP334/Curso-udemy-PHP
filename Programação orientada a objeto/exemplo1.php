<?php

class Pessoa {

	public $nome;//atributo

	public function falar(){//método

		return "O meu nome é ".$this->nome;
	}
}

$mariana = new Pessoa();
$mariana->nome = "Mariana Moraes";
echo $mariana->falar();
//para se referir a alguma variavel dentro de um método deve se usar $this-> variavel

?>

