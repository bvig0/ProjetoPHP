<?php 

$mascIdade = 0;
$femIdade = 0;
$mascAltura = 0;
$femAltura = 0;
$mascSexo = "M";
$femSexo = "F";
$somafemAltura = 0;
$cont = 0;

function medFemAltura($somaFemAltura) {
	$media = $somaFemAltura / 25;
	echo "média de altura das mulheres é: $media </br>";
}

while($cont <= 25){
$mascIdade = 30;
$femIdade = 17;
$mascAltura = 1.80;
$femAltura = 1.70;
$femSexo = "F";
$mascSexo = "M";
$somaFemAltura = $somaFemAltura + $femAltura;
$cont++;

}
	if($mascAltura > $femAltura) {
		echo "a maior altura é: $mascAltura </br> e a menor altura é: $femAltura </br>";
	} 
    else{
		echo "a maior altura é: $femAltura </br> e a menor altura é: $mascAltura </br>";
	}
    
    if($mascIdade > $femIdade) {
		echo "maior idade masculina é: $mascIdade </br> e a menor idade feminina é: $femIdade </br>";
	} 
    else{
		echo "maior altura é de $femAltura</br> e a menor altura é: $mascAltura </br>";
	}


	echo(medFemAltura($somaFemAltura));
 ?>