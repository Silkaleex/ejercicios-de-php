<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body style="padding:23.5px 5px;background: linear-gradient(45deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 50%, rgba(0,212,255,1) 100%);background-repeat:no-repeat;background-position:center;background-size:cover;">
<table border="1" style="margin:0px auto;text-align:center;background-color:#14213d;font-family: 'Roboto Condensed', sans-serif;font-size:35px;">
        <tr>
            <?php foreach($categorias as $categoria):?>
                <th style="color:#fca311;"><?=$categoria?></th>
                <?php endforeach;?>
        </tr>
    <?php require_once'1fila.php'?>
    <?php require_once'2fila.php'?>
    <?php require_once'3fila.php'?>
    </table>
</body>
</html>