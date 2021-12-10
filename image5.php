<?php
	

$image_name ='nature.png';
	
// Load image file
$image = imagecreatefrompng($image_name);

// Use imagescale() function to scale the image
$img = imagescale( $image, 300, 200 );

// Output image in the browser
header("Content-type: image/png");
imagepng($img);

?>
