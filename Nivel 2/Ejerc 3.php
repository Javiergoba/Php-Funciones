<?php

$chocolate = 1;
$chicles = 0.50;
$caramelos= 1.50;
$total = 0;

function tChoco($chocolate){
    $und = 5;
    $totalchoco= 0;
    if ($und >=1){
        $totalchoco = $chocolate * $und;
    }else {
    }
    return $totalchoco;
}
function tChicles(float $chicles){
    $und= 3;
    $totalChicles=0;
    if ($und >=1){
        $totalChicles = $chicles * $und;
    }else {
    }
    return $totalChicles;
}
function tCar(float $caramelos){
    $und=2;
    $totalcaram=0;
    if ($und >=1){
        $totalcaram = $caramelos * $und;
    }else {
        
    }
    return $totalcaram;
}
$total= tChoco($chocolate)+tChicles($chicles)+tCar($caramelos);
echo "Chocolate: " . tChoco($chocolate)/1 ." ud<br>";
echo "Chicles: " . tChicles($chicles)/0.50 ." ud<br>";
echo "Caramelos: " . tCar($caramelos)/1.50 ."ud<br>";
echo "El total de la compra es;<b> $total euros</b>". "<br>";

?>