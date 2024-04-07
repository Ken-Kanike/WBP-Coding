
<h3>Write a program to create pdf file using PHP</h3>
<?php
require('fpdf/fpdf.php');

// Create instance of the FPDF class
$pdf = new FPDF();

// Add a new page to the PDF
$pdf->AddPage();

// Set the font for the PDF
$pdf->SetFont('Arial', 'B', 16);

// Add a cell with text
$pdf->Cell(40, 10, 'Hello World!');

// Output the PDF to the browser
$pdf->Output();
?>
