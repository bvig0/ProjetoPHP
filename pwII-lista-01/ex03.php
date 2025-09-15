<?php 
echo("Digite seu nome, sexo(M ou F) e idade <br>");
$nome = "Fulana";
$sexo = "F";
$idade = 24;
$sit = "";

function verificar($nome, $sexo, $idade, $sit) {
    if($sexo == "F" && $idade < 25){
        $sit = "ACEITO";
    }
    else{
        $sit = "NÃO ACEITO";
    }
return "<br>Nome: $nome <br> Situação: $sit";
}
echo verificar($nome, $sexo, $idade, $sit);

?>