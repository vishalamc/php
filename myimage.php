<?php
$image = imagecreate(400, 400);
$white=imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 0, 153, 0);
$black = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 12, 170, 60, "C", $black);
imagefilledrectangle($image, 50, 50, 350, 350, $green);
imagestring($image, 12, 170, 60, "O", $black);
imagefilledrectangle($image, 100, 100, 300, 300, $white);
imagestring($image, 12, 170, 60, "O", $black);
imagefilledrectangle($image, 150, 150, 250, 250, $green);
imagestring($image, 12, 170, 180, "L", $black);

//imagefilledrectangle($image, 165,165, 200, 200, $white);
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);

?>
