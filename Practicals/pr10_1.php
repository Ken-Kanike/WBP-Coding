<?php
if(isset($_POST['register']))
{
    echo "<br>Name : ".$_POST['name'];
    echo "<br>Gender : ".$_POST['gender'];
    echo "<br>Hobbies : ";
    $i = 0;
    while($i < sizeof($_POST['hobby'])){
        echo $_POST['hobby'][$i]." ";
        $i++;
    }
}
?>