Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
<br></br>
<?php
 
 $min= 50;
 $inicio= 0.10;
 $extra= 0.05;
function totalpagar($min, $inicio, $extra){

    if ($min <= 3){
        echo "La duracion ha sido de $min minutos vas a pagar; " . $inicio;
    }else {
        echo "La duracion ha sido de $min minutos vas a pagar; " . ($min*$extra)+$inicio;
    }
}
echo totalpagar($min, $inicio, $extra);

?>