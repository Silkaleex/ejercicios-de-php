<?php
/*Ejercicio4.
Crear un script en php que tenga 4 variables.
1- Que sea de tipo array
2- Que sea de tipo string
3- Otra int
4- Otra booleana
que imprima el mensaje segun el tipo de variable que sea
*/
$matriz = array('Hola mundo', 44);
$titulo = "Master en PHP";
$numero = 10;
$verdadero = true;
if(is_array($matriz)){
    echo '<h1>Matriz es de tipo array</h1>';
}
if(is_string($titulo )){
    echo '<h1>'.$titulo.'es de tipo string</h1>';
}
if(is_integer($numero)){
    echo '<h1>'.$numero.'es de tipo integuer</h1>';
}
if(is_bool($verdadero)){
    echo '<h1>'.$verdadero.'es de tipo boolean</h1>';
}
?>