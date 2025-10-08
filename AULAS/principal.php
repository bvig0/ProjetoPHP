<?php 
require_once("cabecalho.php");


$idade = 17;

if($idade < 16){
	include("votacaoMenor.php");
}elseif ($idade < 18){
	include("votacao16.php");
}else{
	include("votacaoMaior.php");
}


require_once("rodape.php");

 ?>