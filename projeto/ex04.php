<?php 
echo("Digite 3 números para eles aparecerem em ordem decrescente <br>");
$num1 = 4;
$num2 = 9;
$num3 = 2;
$bp = 0; 
$loop = false;

while($loop != true)
    if($num1 < $num2){
		$bp = $num2;
		$num2 = $num1;
		$num1 = $bp;
    }
    elseif ($num2 < $num3) {
		$bp = $num3;
		$num3 = $num2;
		$num2 = $bp;
	} 
    else{
		$loop = true;
		echo("$num1 $num2 $num3");
	}
?>