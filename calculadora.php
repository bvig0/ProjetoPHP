<?php 
	echo ("---CALCULADORA--- <br>");
	$valor1 = 10;
	$valor2 = 20;

	$operador = "+";

	// funções
	function somar($num1, $num2){
		return($num1 + $num2);
	}
	function subtrair($num1, $num2){
		return($num1 - $num2);
	}
	function multiplicar($num1, $num2){
		return($num1 * $num2);
	}
	function dividir($num1, $num2){
		return($num1 / $num2);
	}

	if($operador == "+" || $operador == "somar"){
		echo ("Os números digitados foram: $valor1 e $valor2 <br>Operador escolhido: $operador <br>");
		$resposta = somar($valor1, $valor2);
		echo("A conta foi: $valor1 + $valor2 = $resposta <br>");

	}

	
 ?>



