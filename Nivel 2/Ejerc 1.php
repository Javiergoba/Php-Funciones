Ens han demanat un llistat de cada any on es van produir jocs olímpics des de 1960 inclòs fins al 2016. Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat.
<br>
<?php
$añoIni= 1960;
$añoFin= 2016;

 for ($i=$añoIni ; $i <=$añoFin; $i+= 4){
    echo "<b>Los años que ha habido Juegos Olimpicos son; </b>".($i)."<br>";
 }








?>