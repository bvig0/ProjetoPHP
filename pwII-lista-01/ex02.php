<?php 
echo("Digite um número divisivel por 10, 5 ou 2 <br>");
$num = 10;
$div = 0;

if($num % 10 == 0){
	echo ("<br>O número $num é divisível por 10");
}
if($num % 5 == 0){
	echo("</br>O número $num é divisível por 5");
}
if($num % 2 == 0){
	echo("</br>O número $num é divisível por 2");
}
else{
    echo("</br>O número $num não é divisível por 10, 5 ou 2");
}

?>