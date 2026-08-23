<?php
 $agents = array("Jett","Killjoy","Raze","Skye","Fade","Viper","Deadlock","Sage","Reyna");
 echo "Select Your Agent:-"."<br>";
 echo $agents[8]."<br>";
 echo $agents[7]."<br>";
 echo $agents[6]."<br>";
 echo $agents[5]."<br>"."<br>";

$student = array("Alex" => 1856, "Sarah" => 1863, "Ethan" => 1854);
echo $student["Sarah"]."<br>";
echo $student["Alex"]."<br>";
echo $student["Ethan"]."<br>"."<br>";

$multi = array(
    array("Alex", "TYCO", 1856),
    array("Sarah", "TYCO", 1863),
    array("Ethan", "TYCO", 1854)
);

echo "Name:".$multi[1][0]."<br>";
echo "Class:".$multi[1][1]."<br>";
echo "Roll no:".$multi[1][2]."<br>";
 
?>