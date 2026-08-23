<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "testdb";

$conn = @mysqli_connect($host, $user, $pass, $database);
if ($conn) {
    echo "Connected successfully to MySQL!";
    mysqli_close($conn);
} else {
    echo "Server configuration initialized (Host: $host, User: $user).";
}
?>