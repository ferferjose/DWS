<?php
require_once 'ranking.php';
require('fpdf.php');

// Crear una instancia de FPDF
$pdf = new FPDF('P', 'mm', 'A4'); // P: Portrait, mm: milímetros, A4: tamaño de página

// Añadir una página
$pdf->AddPage();

// Establecer la fuente para el título
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(200, 10, 'Ranking de Ciudades', 0, 1, 'C'); // Título centrado

// Establecer la fuente para el contenido
$pdf->SetFont('Arial', 'B', 14);

// Salto de línea
$pdf->Ln(10);

// Establecer el color de fondo para los encabezados (azul oscuro) y el color del texto (blanco)
$pdf->SetFillColor(0, 51, 102); // Azul oscuro
$pdf->SetTextColor(255, 255, 255); // Blanco

// Calcular la posición X para centrar la tabla (190mm es el ancho total de la página menos el espacio para las celdas)
$celdaAncho = 60;  // Ancho de cada celda
$espacioTotal = $celdaAncho * 2;  // Ancho total de la tabla
$xCentrado = (210 - $espacioTotal) / 2;  // Centrado en la página A4 (210mm de ancho)

$pdf->SetX($xCentrado);  // Establecer la posición X para centrar la tabla

// Añadir los encabezados de la tabla
$pdf->Cell($celdaAncho, 10, 'Ciudad', 1, 0, 'C', true); // Ciudad (con fondo azul y texto blanco)
$pdf->Cell($celdaAncho, 10, 'Puntuacion', 1, 1, 'C', true); // Puntuación (con fondo azul y texto blanco)

// Restaurar el color de texto a negro para los datos
$pdf->SetTextColor(0, 0, 0); // Texto negro
$pdf->SetFont('Arial', '', 12);

// Añadir los datos del ranking
if ($datos) {
    $filas = 0;  // Empezamos con un contador de filas en 0

    foreach ($datos as $valor) {
        // Alternar colores de fondo para filas pares e impares
        if ($filas % 2 == 0) {
            $pdf->SetFillColor(240, 240, 240);  // Gris claro para las filas pares
        } else {
            $pdf->SetFillColor(255, 255, 255);  // Blanco para las filas impares
        }

        // Añadir los datos de la fila
        $pdf->SetX($xCentrado);  // Reestablecer la posición X centrada
        $pdf->Cell($celdaAncho, 10, $valor['nombreCiudad'], 1, 0, 'C', true); // Ciudad
        $pdf->Cell($celdaAncho, 10, $valor['puntuacion'] . ' puntos', 1, 1, 'C', true); // Puntuación

        $filas++;  // Incrementamos el contador de filas
    }
} else {
    $pdf->SetX($xCentrado);  // Reestablecer la posición X centrada
    $pdf->Cell(120, 10, 'No hay salas activas', 1, 1, 'C');
}

// Generar el PDF y enviarlo al navegador
$pdf->Output(); // Esto lo enviará al navegador
?>
