<?php
   //$img = imagecreatetruecolor(500, 300);
   $img = imagecreate(500, 300);
   $color = imagecolorallocate($img, 155, 250, 280);
   imagefill($img, 0,0,$color);
   header("Content-Type: image/jpeg");
   imagepng($img);
 ?>