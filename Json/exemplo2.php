<?php

//json_decode já tem o json formatado e transforma em array novamente

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Gustavo","idade":19}]';

$data = json_decode($json, true);

var_dump($data);


?>