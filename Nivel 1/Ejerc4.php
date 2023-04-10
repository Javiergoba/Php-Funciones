<?php
$num = 0;
if ($num == 0 ){
    $num =10;
}
function esconderse($num){
    for ($i = 0 ; $i <= $num;$i++){
    echo $i."<br>";
}
}
esconderse(10);

?>