<?php
$img=imagecreatetruecolor(700,700);
$points=array(
				621,172,
				521,324,
				680,313
			);
$imageColor=imagecolorallocate($img, 255, 255, 255);
imagefilledpolygon($img, $points, 3, $imageColor);
imageellipse($img, 250, 150, 400, 250, $imageColor);
imageline($img, 450, 250, 50, 50, $imageColor);
header('content-type:image/png');
imagepng($img);
imagedestroy($img);
?>
