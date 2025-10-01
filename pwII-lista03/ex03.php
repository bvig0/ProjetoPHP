<?php 
$soma = 0;
$maior = 0;
$cont = 0;

$alunos = [
    ["Ana", 9],
    ["Bruno", 7],
    ["Carla", 5],
    ["Daniel", 8],
    ["Eduarda", 6],
    ["Felipe", 10],
    ["Gabriela", 4],
    ["Hugo", 9],
    ["Isabela", 3],
    ["João", 8]
];

foreach ($alunos as $aluno) {
    $nota = $aluno[1]; 
    
    $soma += $nota;
    
    if ($nota > $maior) {
        $maior = $nota;
    }
    $cont++;
}

$soma = $soma / $cont;

echo("A média das notas é:  $soma <br>A maior nota encontrada é: $maior <br>");


?>
