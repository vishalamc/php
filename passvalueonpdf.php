<?php
   
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2;     
 
require('fpdf184/fpdf.php');//step1
//set document properties

$pdf=new FPDF();//step2

$pdf->AddPage();////step3
$pdf->SetAuthor('Kumar Vishal');
$pdf->SetTitle('PDF generate');
$pdf->SetFont('Arial','B',18);////step4
$pdf->SetTextColor(50,50,200);
$pdf->Cell(100,10,'Num1 is:'.$number1,0,1,'C');
$pdf->Cell(100,10,'Num2 is:'.$number2,0,1,'C');
$pdf->Cell(100,10,'The sum is:'.$sum,0,1,'C');
$pdf->output();  
  }  
?> 

