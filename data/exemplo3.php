<?php
//           padrão do linux, padrão utf-8 e padrão windows
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B %R"));
//ucwoeds para deixar as primeiras letras maiúsculas
?>