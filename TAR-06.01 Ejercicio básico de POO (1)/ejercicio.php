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
            if ($_GET['n1'] > $_GET['n2']) { //Esto lo hago para validar aqui y no hacerlo dos veces en los metodos de la calculadora. A su vez me permite controlar mejor los datos ya que en la clase calculadora siempre va a ser mayor n1
                $objOperaciones = new Operaciones($_GET['n1'], $_GET['n2']);
            } else {
                $objOperaciones = new Operaciones($_GET['n2'], $_GET['n1']);
            }
            echo '<h1>Resultado de operación</h1>';
            $objOperaciones->tipoOperacion($_GET['operacion']); //No me es necesario hacer un echo porque ya lo tengo en los métodos
        ?>
        <a href="formulario.html" class="back-btn">Volver</a>
    </div>
</body>
</html>