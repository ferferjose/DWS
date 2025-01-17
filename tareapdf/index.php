<?php
    require_once 'ranking.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Ranking</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div>
            <h1 id="tituloJuego" class="tituloRanking">Ran<span class="king">king</span></h1>
            <div class="ranking-container">
                <table class="ranking">
                    <tr>
                        <td>Ciudad</td>
                        <td>Puntuación</td>
                    </tr>
                    <?php
                        if ($datos) {
                            foreach ($datos as $valor) {
                                echo '<tr>';
                                    echo '<td>' . $valor['nombreCiudad'] . '</td>';
                                    echo '<td>' . $valor['puntuacion'] . ' puntos</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="2"><p id="noActivas">No hay salas activas</p></td></tr>';
                        }
                    ?>
                    <tr>
                        <td colspan="2"><a href="pdf.php" class="enlace">Ver PDF</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <script src="js/views/musica.js"></script>
    <script src="js/views/decirNombre.js"></script>
</body>
</html>
