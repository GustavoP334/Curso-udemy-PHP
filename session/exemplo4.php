<?php

session_id('a04kdnhrdt6grk64dbgll634m4'),

require_once("config.php");

//regenera o ID da sessão, toda vez que o usuário atualizar ganhara outro ID:

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>