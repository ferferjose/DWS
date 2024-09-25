<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>¿Que ramo prefiere Isa?</h1>
    <?php
        $imagenes=array(
            "Primer ramo"=>"ramo1.jpeg",
            "Segundo ramo"=>"ramo2.jpeg",
            "Tercer ramo"=>"ramo3.jpeg",
            "Cuarto ramo"=>"ramo4.jpeg"
        );

        foreach ($imagenes as $i => $valor) {
            echo '<div><h2>'.$i.'</h2><img src="img/'.$imagenes[$i].'"><div>';
        }
    ?>
</body>
</html>