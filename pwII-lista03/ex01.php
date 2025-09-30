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

$matrizResp = [];

for ($linha = 0; $linha < 3; $linha++){
    for ($coluna = 0; $coluna < 3; $coluna++){
        $matrizResp[$linha][$coluna] = $matriz1[$linha][$coluna] + $matriz2[$linha][$coluna];
    }
}
echo "Somando dos Arrays (Matrizes).";
echo "<pre>";
print_r($matrizResp);
echo "<pre>";
?>