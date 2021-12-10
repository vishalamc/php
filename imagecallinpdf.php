<?php
require('imageclass.php');

$pdf=new imageclass();
$pdf->AddPage();
$pdf->SetDrawColor(255,0,0);
$pdf->SetFillColor(0,0,255);
$pdf->SetLineWidth(4);
$pdf->Rectangle(180,110,'FD');
$pdf->Output();
?>