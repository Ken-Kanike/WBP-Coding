<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TestDB2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to delete data from the employee table
$sql = "DELETE FROM employee WHERE ename = 'Smith Shane'";

if (mysqli_query($conn, $sql)) {
    echo "Data deleted successfully!";
} else {
    echo "Error deleting data: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
