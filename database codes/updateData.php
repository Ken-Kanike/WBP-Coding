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

// SQL query to update data in the employee table
$sql = "UPDATE employee SET esalary = 65000.00 WHERE ename = 'John Doe'";

if (mysqli_query($conn, $sql)) {
    echo "Data updated successfully!";
} else {
    echo "Error updating data: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
