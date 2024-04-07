<?php
 $agents = array("Jett","Killjoy","Raze","Skye","Fade","Viper","Deadlock","Sage","Reyna");
 echo "Select Your Agent:-"."<br>";
 echo $agents[8]."<br>";
 echo $agents[7]."<br>";
 echo $agents[6]."<br>";
 echo $agents[5]."<br>"."<br>";

$student =array("Junaid" => 1856,"Rion"=> 1863, "Vedanti"=> 1854);
echo $student["Rion"]."<br>";
echo $student["Junaid"]."<br>";
echo $student["Vedanti"]."<br>"."<br>";

$multi = array(
    array("Juniad","Tyco",1856),
    array("Rion","Tyco",1863),
    array("Vedanti","Tyco",1854)
);
 
echo "Name:".$multi[1][0]."<br>";
echo "Class:".$multi[1][1]."<br>";
echo "Roll no:".$multi[1][2]."<br>";
 
?>