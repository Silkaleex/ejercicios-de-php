<?php
/*Ejercicio1.
Hacer un progrma que tenga 8 numeros entero y hacer los siguientes pasos:
-recorrer, mostrarlo
-ordenarlo y mostrarlo
-mostrar su longitud
-buscar algun elemento
-buscar algun elemento que me llege por la url
 */
//funcion
function mostrarArray($numeros){
    $resultado = '';
    foreach($numeros as $numero){
        //$resultado = $resultado.$numero."</br>
        $resultado .= '<li>'.$numero.'</li>';
    }
    return $resultado;
}
//Crear array
$numeros = array(8,1,3,2,5,4,6,7);

//Recorrer y mostrarlo
echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros);

//Ordenar numeros
echo "<h1>Ordenar y mostrar</h1>";
sort($numeros);
var_dump($numeros);
echo mostrarArray($numeros);

//Longitud del array
echo "<h1>Número total de elementos</h1>";
echo count($numeros);

//Buscar un dato en el array
$buscar = 2;
echo "<h1>Buscar en el array el numero $buscar</h1>";
if(array_search($buscar,$numeros)){
    echo "<h4>Ese numero esta en este array</h4>";
}else{
    echo "<h4>Ese numero NO esta en este array</h4>";
}
//Buscar un dato en el array y pasarlo por el parametro de la url
if(isset($_GET['numero'])){
    $busqueda = $_GET['numero'];
echo "<h1>Buscar en el array el numero $busqueda por el parametro GET</h1>";
$search = array_search($buscar,$numeros);
if(!empty($search)){
    echo "<h4>Ese numero esta en este array</h4>";
}else{
    echo "<h4>Ese numero NO esta en este array</h4>";
}
}

?>