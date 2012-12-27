<?php
require_once 'masterfile.php';
	$text2 = $x[2].' - '.$dtime;
	$text3 = wordwrap($t[0], 31, "\n", true);
	$box = @ImageTTFBBox(23,0,'arial.ttf',$user[name]);
	$textwidth = abs($box[4] - $box[0]);
	$x_finalpos = 255-($textwidth/2);
	$image = imagecreatefromjpeg('img_empty.jpg');
	$font_color = ImageColorAllocate($image,0,0,0);
	imagettftext($image, 23, 0, $x_finalpos, 116, $font_color, 'arial.ttf', $user[name]);
	imagettftext($image, 16, 0, 202, 146, $font_color, 'arial.ttf', $text2);
	imagettftext($image, 16, 0, 120, 200, $font_color, 'arial.ttf', $text3);
	ImageJPEG($image, $img);
	ImageDestroy($image);
?>