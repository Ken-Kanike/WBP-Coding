<?php 
//    $img = imagecreate(300,200);
//    imagejpeg($img);
//    header("Content-Type:image/jpeg");
?>

<?php 
//    $img = imagecreate(300,300);
//    $red = imagecolorallocate($img,255,0,0);
//    imagejpeg($img);
//    header("Content-Type:image/jpeg");
?>


<?php 
//    $img = imagecreate(300,300);
//    $white =  imagecolorallocate($img,255,255,255);
//    $red = imagecolorallocate($img,255,0,0);
//    imagefilledrectangle($img,50,50,100,100,$red);
//    imagestring($img,5,50,120,"Red Color Image",$red);
//    imagejpeg($img);
//    header("Content-Type:image/jpeg");
?>


<?php 
   $imagePath = __DIR__ . '/house.jpeg';
   if (file_exists($imagePath)) {
       $img = imagecreatefromjpeg($imagePath);
       $width = imagesx($img);
       $height = imagesy($img);
       $x = (int)($width / 2);
       $y = (int)($height / 2);
       $scaledImg = imagecreatetruecolor($x, $y);
       imagecopyresampled($scaledImg, $img, 0, 0, 0, 0, $x, $y, $width, $height);
       header("Content-Type: image/png");
       imagepng($scaledImg);
       imagedestroy($img);
       imagedestroy($scaledImg);
   } else {
       header("Content-Type: text/plain");
       echo "Sample image not found: house.jpeg";
   }
?>