<?php
   
require('fpdf184/fpdf.php');//step1
//set document properties

$pdf=new FPDF();//step2

$pdf->AddPage();////step3
$pdf->SetAuthor('Kumar Vishal');
$pdf->SetTitle('PDF generate');
$pdf->SetFont('Arial','B',18);////step4
$pdf->SetTextColor(50,50,200);
for($i=0;$i<5;$i++)
{
	
$pdf->Cell(100,10,'FPDF Library',0,1,'C');
}

//$pdf->Cell(100,10,'FPDF Library',0,0,'C',0);////step5

$pdf->output();////step6
   
   
?>