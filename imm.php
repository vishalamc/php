<?Php
$img=imagecreatetruecolor(700,700);
$points=array(
                621,172,
                521,324,
                680,313
            );
$imageColor=imagecolorallocate($img, 255, 255, 255);
imagefilledpolygon($img, $points, 3, $imageColor);

$angle='80';  
for($i=0;$i<5;$i++){
$img_rotated = imagerotate($img, $angle, 0); }
header('content-type:image/jpeg');
imagejpeg($img_rotated); 
imagedestroy($img_rotated); 
?>