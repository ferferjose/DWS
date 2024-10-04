<?php
    $num = $_GET['num'];
    $par = ParCuadrado($num);
    if($par){
        header("Location:par.php?par=$par&numero=".sqrt($num)."&cuadrado=".$num);
    }else{
        header("Location:impar.php?par=$par&numero=".sqrt($num)."&cuadrado=".$num);
    }

    function ParCuadrado(&$cuadrado){
        $esPar = false;
        if($cuadrado%2==0){
            $esPar = true;
        }
        $cuadrado = $cuadrado * $cuadrado;
        return $esPar;
    }
?>