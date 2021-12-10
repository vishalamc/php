<?php
require("fpdf184/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image('images/img1.png',0,0);
$pdf->setAuthor("kumar vishal");
$pdf->setTitle("MyPdfPage");
$pdf->setFont("Arial","B",10);
$pdf->setTextColor(25,25,25);
$pdf->Cell(70,50,'kumar Vishal',1,1,'C');
$pdf->output();
?>
