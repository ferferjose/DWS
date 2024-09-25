<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <th colspan="2">TABLA DE FACTORIALES DEL 0 AL 10</th>
        
    </tr>
    <tr class="subtitulo">
        <td>NÚMERO</td>
        <td>FACTORIAL</td>
    </tr>
    <tr></tr>
        <?php
            require_once 'factorial.php';
            for($i=0; $i<=10; $i++){
                $total[$i]=factorial($i);
                echo "<tr><td>".$i."</td><td>".$total[$i]."</td></tr>";
            }
                // print_r($total);
                // var_dump($total);
                // echo count($total);
                // echo 'El elemento 11 del array no es '.$total[11]; 
        ?>
    </table>
</body>
</html>