<?php
require('fpdf184/fpdf.php');

//create a FPDF object
$pdf=new FPDF();

//set document properties
$pdf->SetAuthor('Kumar Vishal');
$pdf->SetTitle('PDF generate');

//set font for the entire document
$pdf->SetFont('Arial','B',20);

$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage();

//insert an image and make it a link
//$pdf->Image('login3.jpg',10,20,33,0,' ','http://www.fpdf.org/');
//$pdf->Image('images/login3.jpg',0,0);
//display the title with a border around it
$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(100,10,'FPDF Library',1,0,'C',0);

//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (10,50);
$pdf->SetFontSize(10);
$pdf->Write(5,'Congratulations! You have generated a PDF.');

//Output the document
$pdf->Output('example1.pdf','I');
?> 