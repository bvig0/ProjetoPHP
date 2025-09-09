<?php 
	echo ("---CALCULADORA--- <br> selecione uma opção abaixo e efetue a operação <br> 1-Somar <br> 2-subtrair <br> 3-multiplicar <br> 4-dividir ");
	// Variaveis
	$valor1 = 10;
	$valor2 = 20;
	$operador = "1";

	// Funções
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

	// Decisão/Ação do código
	if($operador == "1"){
			$resposta = somar($valor1, $valor2);
			$operador = "Soma";
		}
	else if($operador == "2"){
			$resposta = subtrair($valor1, $valor2);
			$operador = "Subtração";
		}
	else if($operador == "3"){
			$resposta = multiplicar($valor1, $valor2);
			$operador = "Multiplicação";
		}
	else if($operador == "4"){
			$resposta = dividir($valor1, $valor2);
			$operador = "Divisão";
		}
	else {
			echo("Inválido.");
		}
		echo("<br><br>Os números digitados foram: $num1 e $num2
		<br>O operador escolhido foi: $operador
		<br>A resposta do calculo é: $resposta");
 ?>



