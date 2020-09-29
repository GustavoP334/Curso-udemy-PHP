<?php 

$data= [
	"nome"=>"Gustavo"
];

define('SECRETI', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$openssl = openssl_encrypt(
	json_encode($data),
	'AES-128-CBC',
	SECRET,
	0,
	SECRETI
);

echo "mensagem encriptada: " . $openssl;
echo "<br>";

//descriptografado:
$string = openssl_decrypt(
	$openssl,
	'AES-128-CBC',
	SECRETI,
	0,
	SECRET);

echo "Mensagem descriptografada: " . $string;

 ?>