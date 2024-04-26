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
   echo "hello<br>";
   $img = imagecreatefromjpeg("C:/xampp/htdocs/WBP Coding/house.jpeg");
   $width = imagesx($img);
   $heigth = imagesy($img);
   $x = $width /2;
   $y = $heigth /2;
   $scaledImg = imagecreatetruecolor($x,$y);
   imagecopyresampled($scaledImg,$img,0,0,0,0,$x,$y,$width,$heigth);
   $red = imagecolorallocate($img,255,0,0);
   header("Content-Type:image/png");
   imagepng($scaledImg);
?>