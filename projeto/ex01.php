<?php 
$num1 = 10;
$num2 = 5;
function soma ($num1, $num2) {
    return $num1 + $num2;
}
$soma = soma($num1, $num2);

if($soma > 20){
    $soma+=8;
    echo("O valor do número somado mais 8 é de: $soma");
}

elseif($soma <= 20){
    $soma-=5;
 	echo("O valor do número subtraido 5 é de: $soma");
}
else{
    echo("Valor Inválido.");
}
 ?>