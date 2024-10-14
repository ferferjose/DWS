<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'fecha.php';
        $objFecha = new Fecha(); // instanciamos el objeto de la clase fecha
        $objFecha->escanearFecha($_GET['fechaUsuario']); //Escanea la fecha y la separa segun el formato
        //Dice si es bisiesto o no y devuelve true o false y cambia automaticamente los días de febrero
        if($objFecha->esBisiesto()){
            echo '<p>Es bisiesto</p>';
        }else{
            echo '<p>No es bisiesto</p>';
        }
        //Muestra la fecha
        echo $objFecha->devolverFecha();

        //Te dice los días que tiene el mes elegido
        echo '<p>El mes tiene '.$objFecha->getFechasID($objFecha->getMes()).' días</p>';
        
    ?>
</body>
</html>