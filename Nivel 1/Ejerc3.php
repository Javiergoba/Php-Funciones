Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.<br>
<?php
$num = 100;
function esconderse($num){
    for ($i=0; $i <= $num; $i++){
        echo $i."-";
    }
}
esconderse($num);
?>