<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php 

/*"HACKER"*/ $_POST['busca'] = '<scrip>alert{"ok"}</script>';

if(isset($_POST['busca'])) {

	//echo strip_tags ($_POST['busca'], "<strong><a>");
	echo htmlentities($_POST['busca']);
}

 ?>