<?php

/*
==================================

PHP auto-aligning, text-over-image script by Arjun Venugopal

Email : arjun.venugopal@hotmail.com

YOU MAY USE THIS SCRIPT AND YOU CAN EDIT/MODIFY OR RE-DISTRIBUTE IT.
FEEL FREE TO REPORT ANY BUGS, AND CONTACT ME IF YOU ARE FACING ANY ERRORS.


==================================
APPLICATIONS
-------------
1) Automated certificate generators
2) Simple watermarks using text
3) Birthday/ greeting card generators
==================================

*/
error_reporting(0);

use GDText\Box;
use GDText\Color;

header('Content-type: image/jpeg');

//load the jpg image
$jpg_image = imagecreatefromjpeg("cuperticket.jpg");

//Add some colors to the text
$red	= imagecolorallocate($jpg_image, 136,0, 21);
$black = imagecolorallocate($jpg_image, 0, 0, 63);
//$YOURCOLOR = imagecolorallocate(jpg_image, R, G, B);

//Load the font
$font_path = 'ARDECODE.ttf';
$sign = "@rjun";

//loading text. You can use fixed value here
$in_text = $_GET['text'];
$text = strip_tags($in_text);
if($text == ''){
	$text = "Your Name";
}

//$text = "Arjun and Me";

$image_width = imagesx($jpg_image);  
$image_height = imagesy($jpg_image);

$text_box = imagettfbbox(54, 0, $font_path, $text);

// Setting text width and height
$text_width = $text_box[2]-$text_box[0];
$text_height = $text_box[7]-$text_box[1];

// Setting coordinates in which the text to be placed
$x = ($image_width/2) - ($text_width/2.8);
$y = ($image_height/2.1) - ($text_height/8);

//writing text over jpg image
imagefttext($jpg_image, 42, 0, $x, $y, $red, $font_path, $text);
imagefttext($jpg_image, 32, 15, 252, 648, $black, $font_path, $sign);
imagejpeg($jpg_image);
imagedestroy($jpg_image);


?>