<?php
	if(isset($_POST['btnsubmit']))
	{
		$name=$_POST['txtName'];
		$custid=$_POST['txtId'];
		$amount=$_POST['txtAmount'];

		require('fpdf184/fpdf.php');
		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetTitle("My New Pdf");
		$pdf->SetFont('Arial','I',12);
		//$pdf->SetTextColor(25,25,0);
		$pdf->Cell(100,10,'Bill Payment Receipt',1,1,'C');
		$pdf->Cell(100,10,'Name:'.$name,0,1);
		$pdf->Cell(100,10,'Customer Id:'.$custid,0,1);
		$pdf->Cell(100,10,'Amount:'.$amount,0,1);
		$pdf->output();


    }
?>