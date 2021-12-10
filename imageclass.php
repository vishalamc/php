<?php
require('fpdf184/fpdf.php');

class imageclass extends FPDF
{

function Rectangle($x,$y, $style='D')
{
$image = imagecreate(500, 300);
$color = imagecolorallocate($image, 155, 250, 280);
imagefilledrectangle($image, 0, 0, $x, $y, $color);

header('Content-type: image/png');
ImagePNG($image);
ImageDestroy($image);
}

}
?>