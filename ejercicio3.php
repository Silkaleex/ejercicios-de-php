<?php
/*Ejercicio3.
Programa que compruebe si una variable esta vacia y si esta vacia, rellenarla con un texto en minuscula
y si no lo esta que se muestre en mayuscula y en negrita
*/
$texto = '';
//empty me COMPRUEBA si una array esta vacia tiene fallos....
if(empty($texto)){
    $texto = "Hola soy el relleno de la variable";
    $textoMayus = strtoupper($texto);
    echo '<strong>'.$textoMayus.'</strong>';
}else{
    echo "la variable tiene este contenido dentro: ".$texto;
}
?>