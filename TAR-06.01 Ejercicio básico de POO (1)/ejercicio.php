<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <?php
            require_once 'operaciones.php';
            $objOperaciones = new Operaciones($_GET['n1'], $_GET['n2']);
            echo '<h1>Resultado de operación</h1>';
            echo '<p>'.$objOperaciones->tipoOperacion($_GET['operacion']).'<p/>';
        ?>
        <a href="formulario.html" class="back-btn">Volver</a>
    </div>
</body>
</html>