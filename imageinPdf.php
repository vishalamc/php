<?Php
$x = 150; $y = 200;
$image=imagecreatetruecolor($x, $y);
$yellow = imagecolorallocatealpha($image, 255, 255, 0, 75);
// Draw an ellipse
imageellipse($image, 70, 100, 100, 150, $yellow);
header('Content-type: image/png');
ImagePNG($image);
ImageDestroy($image);
require('fpdf184/fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage();
$pdf->Image($image,0,0);
$pdf->Output();
?>