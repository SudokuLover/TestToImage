<?php
//phpinfo();

header('content-type: image/jpeg');
//$email='example@example.com';
$email=$_GET['email'];
$email_length= strlen($email);
$font_size=4;
$image_height=ImageFontHeight($font_size);
$image_width=ImageFontHeight($font_size)*$email_length;
$image=imagecreate($image_width,$image_height);
imagecolorallocate($image,255,255,255);
$font_color=imagecolorallocate($image,0,0,0);
//$image=imagecreatetruecolor(120,2,0);
//imagefill($image,0,0,$font_color);
//imagecopyresampled($image,);
imagestring($image,$font_size,0,0,$email,$font_color);
imagejpeg($image);
/*
$image_height=480;
$image_width=320;
$image=imagecreate($image_width,$image_height);
imagecolorallocate($image,25,25,25);
imagejpeg($image);
header('content-type: image/jpeg');
 */
?>

