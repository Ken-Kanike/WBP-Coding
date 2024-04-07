<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TestDB2";

$conn = mysqli_connect($servername, $username ,$password , $dbname);

if(!$conn){
    die("Connection failed : ".mysqli_connect_error());
} else {
    echo "<br> Connection Establised!";
}

$sql = "CREATE TABLE `TestDB2`.`TABLE1` (`id` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL);";

if(mysqli_query($conn,$sql)){
    echo "<br> Table created successfully!";
} else {
    die("Something went wrong : ".mysqli_error($conn));
}

?>