<?php
//llamado a la libreria
require('fpdf.php');

// Crear un nuevo PDF
$pdf = new FPDF('P', 'cm', array(10, 13)); // P=Portrait, cm=centímetros, tamaño personalizado
$pdf->AddPage();

// Configuración de márgenes
$pdf->SetMargins(1, 1, 1);

// Encabezado
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 1, 'Iverciones Mamandini C.A.' . str_repeat(' ', 10) . 'N- ' . $pdf->PageNo(), 0, 1, 'C');

// Datos del cliente
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 0.5, 'Cliente: Maria Gonsalez  ', 0, 1);
$pdf->Cell(0, 0.5, 'CI: 30565459         Fecha: 09/10/2024', 0, 1);

// Tabla de productos o servicios
$pdf->Cell(1.5, 0.5, 'Cantidad', 1, 0, 'C');
$pdf->Cell(4, 0.5, 'Concepto referencial', 1, 0, 'C');
$pdf->Cell(1.4, 0.5, 'Precio', 1, 0, 'C');
$pdf->Cell(1.4, 0.5, 'Importe', 1, 1, 'C');

// Filas vacías
for ($i = 0; $i < 12; $i++) {
    $pdf->Cell(1.5, 0.5, '', 1, 0);
    $pdf->Cell(4, 0.5, '', 1, 0);
    $pdf->Cell(1.4, 0.5, '', 1, 0);
    $pdf->Cell(1.4, 0.5, '', 1, 1);
}

// Firma y concepto de entrega
// Firma y concepto de entrega
$pdf->Cell(2.4, 1.0, 'Firma:', 1, 0, 'B');

// Totales
$pdf->Cell(3.5, 1.0, 'SUB-TOTAL:', 1, 0, 'B');
$pdf->Cell(2.4, 1.0, 'TOTAL:', 1, 1, 'B');

$pdf->Output();

?>