<?php
require_once 'conexion.php';
    $sql = 'SELECT * FROM Partidas WHERE empezada = "t" ORDER BY puntuacion desc;';

    $resultado = $conexion -> query($sql);

    $datos = [];
    while($fila = $resultado->fetch_assoc()){
        $datos[] = $fila;
    }
?>