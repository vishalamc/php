<?php
   
    if(isset($_POST['btnsubmit']))  
    {  
        $name = $_POST['txtstudent'];  
        $reg = $_POST['txtRegno'];  
       
 
require('fpdf184/fpdf.php');//step1
//set document properties

$pdf=new FPDF();//step2

$pdf->AddPage();////step3
$pdf->SetAuthor('Kumar Vishal');
$pdf->SetTitle('PDF generate');
$pdf->SetFont('Arial','B',18);////step4
$pdf->SetTextColor(50,50,200);
$pdf->Cell(100,10,'Student Name:'.$name,0,1,'C');
$pdf->Cell(100,10,'Reg No:'.$reg,0,1,'C');

$pdf->output();  
  }  
?> 

