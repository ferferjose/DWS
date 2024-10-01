<?php
    if(!empty($_GET['nombre']))
        echo 'Nombre: '.$_GET['nombre'].'<br>';
    if(!empty($_GET['fechaDesastre']))   
        echo 'Fecha: '.$_GET['fechaDesastre'];

    if(isset($_GET['pais']))
        echo 'País: '.$_GET['pais'].'<br>';

    if(!empty($_GET['detalles']))
        echo 'Detalles: '.$_GET['detalles'].'<br>';

    if(isset($_GET['fotos']))
        echo 'Fotos: '.$_GET['fotos'].'<br>';
    if(isset($_GET['desastre']))
        foreach ($_GET['desastre'] as $indice => $valor) {
            echo 'Desastre: '.$valor.'<br>';
        }
/*
    print_r($_GET['desastre']);
    echo '<br/>';
    var_dump($_GET['desastre']);
    echo '<br/>';
    echo '<br/>';
    print_r($_GET);
    echo '<br/>';
    var_dump($_GET);
    */
?>