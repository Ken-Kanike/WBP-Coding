<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username ,$password);

if(!$conn){
    die("Connection failed : ".mysqli_connect_error());
} else {
    echo "<br> Connection Establised!";
}

$sql = "CREATE DATABASE TestDB2;";

if(mysqli_query($conn,$sql)){
    echo "<br> Database created successfully!";
} else {
    die("Something went wrong : ".mysqli_error($conn));
}

?>