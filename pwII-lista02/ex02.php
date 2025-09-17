<?php 

$num = 0;

while ($num < 100) {
	$num++;
	echo("$num <br>");

	if ($num % 10 == 0) {
		echo("$num é multiplo de 10 <br>");
	}
}
 ?>