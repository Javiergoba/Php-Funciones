
<?php
function verificar($nota){
    if ($nota >= 60){
        echo "Primera Division.</br>";
    }else if($nota >=45 && $nota<=59 ){
        echo "Segunda Division.</br>";
    }else if ($nota >=33 & $nota <=44 ){
        echo "Tercera Division.</br>";
    }else{
        echo "El alumno repetira.</br>";
    }
}
    
verificar(13);
verificar(35);
verificar(47);
verificar(61)


?>
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.