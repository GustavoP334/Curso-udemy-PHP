<?php

$diaDaSemana = 9;//date("W");

switch ($diaDaSemana) {

	case 0:
	echo "Segunda";
	break;

	case 1:
	echo "Terça";
	break;

	case 2:
	echo "Quarta";
	break;

	case 3:
	echo "Quinta";
	break;

	case 4:
	echo "Sexta";
	break;

	case 5:
	echo "Sábado";
	break;

	case 6:
	echo "Domingo";
	break;

	default:
	echo "Data divergente";
	break;
}


?>