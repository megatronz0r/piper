<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->SetMargins(0, 0, 0);

$pdf->SetXY (100,0);
$pdf->Cell(15,15,'Hello World!');

$pdf->Output();
?>