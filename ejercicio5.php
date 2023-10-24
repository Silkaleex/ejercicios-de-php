<?php
/*Ejericio5:
crear un array con el contenido de la tabla:
1-ACCION, 2-AVENTURA, 3-ROL
1-THE LAST OF US, 2-ZELDA, 3-ELDEN RING
1-HORIZON, 2-THE WITCHER, 3-DARK SHOULS
1-THE WATCH DOGS, 2-A PLAGE OF TALE, 3-BLOODBORN
Cada fila debe ir separado(includes)
*/
$tabla = array(
    "ACCION" => array('THE LAST OF US', 'HORIZON','THE WATCH DOGS'),
    "AVENTURA"=> array("ZELDA","THE WITCHER","A PLAGE OF TALE"),
    "ROL" =>array("ELDEN RING","DARK SHOULS","BLOODBORN"),
);
$categorias = array_keys($tabla);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php require_once'./ejercicio5/encabezado.php'?>
</body>
</html>