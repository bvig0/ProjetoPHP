<?php 
$emp =[
    [1,"jose",4000],
    [2, "maria",5000],
    [3 ,"joao", 3000]
];

for ($linha = 0; $linha < 3; $linha++){
    for ($coluna = 0; $coluna < 3; $coluna++){
        echo $emp[$linha] [$coluna]. " ";
    }
    echo "<br>" ;
}

/*echo "<pre>";
var_dump($emp);
echo "<pre>";*/


// echo json_encode($emp);
$arr = [
    'v' => 'Verde',
    'e' => 'Verde',
    'z' => 'Azul'
];

foreach($arr as $key => $value){
    echo $key . "=>" . $value . "\n";
}
?>
