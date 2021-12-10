<?php
   $img = imagecreate(500, 300);
   $bgcolor = imagecolorallocate($img, 155, 250, 280);
   $fontcolor = imagecolorallocate($img, 000, 000, 000);
   imagestring($img, 18, 150, 120, "Hello World", $fontcolor);
   header("Content-Type: image/png");
   imagepng($img);
   imagedestroy($img);
?>