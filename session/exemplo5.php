<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
	echo "sua sessão expirou por inatividade, logue novamente para voltar";
	break;

	case PHP_SESSION_NONE:
	echo "sua sessão está habilitada, mas não existe";
	break;

	case PHP_SESSION_ACTIVE:
	echo "sua sessão foi ativada,e existe";
	break;

}
?>