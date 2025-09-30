<?php 
$matriz1 = [
    [25, 12, 35],
    [85, 47, 98],
    [32, 38, 105]
];

$matriz2 = [
    [98, 65, 35],
    [5, 27, 8],
    [74, 14, 3]
];

$somaM1 = 0;
$somaM2 = 0;

for ($linha = 0; $linha < 3; $linha++){
    for ($coluna = 0; $coluna < 3; $coluna++){
        $somaM1 = $somaM1 + $matriz1[$linha][$coluna];
        $somaM2 = $somaM2 + $matriz2[$linha][$coluna];
    }
}

echo "Somando os Arrays (Matrizes).<br>";

echo ("Soma da primeira matriz: $somaM1 <br>Soma da segunda matriz: $somaM2");

?>