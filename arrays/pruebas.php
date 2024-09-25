<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pruebas</title>
</head>
<body>
    <?php
        $colores = array('naranja', 'azul', 'verde');
        foreach ($colores as $i => $value) {
            echo '<p>'.$colores[$i].'</p>';
        }

        $persona['nombre']='Fernando José';
        $persona['apellidos']='González Bernáldez';

        foreach ($persona as $i => $value) {
            echo '<p>'.$i.': '.$value.'</p>';
        }

        $lenguajes=array(
            0=>"css",
            1=>"html"
        );
        foreach ($lenguajes as $key => $value) {
            echo $value;
        }
    ?>
</body>
</html>