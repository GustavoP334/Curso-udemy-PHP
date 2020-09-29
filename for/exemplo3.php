<?php


/*for ($i=date("Y"); $i > date("Y")-100 ; $i--) { 

	echo $i. "<br>";

}
*/

 //COMO FAZER ESSE LOOP NO HTML:

echo "<select>";

for ($i=date("Y"); $i > date("Y")-100 ; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'<option/>' ;

}
echo "<select/>";

?>