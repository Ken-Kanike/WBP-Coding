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
$sql_update = "UPDATE employee SET esalary = 80000.00 WHERE ename = 'Alice Johnson'";

// SQL query to delete data from the employee table
$sql_delete = "DELETE FROM employee WHERE ename = 'John Doe'";

// updating
if (mysqli_query($conn, $sql_update)) {
    echo "<br>Data updated successfully!";
} else {
    echo "<br>Error updating data: " . mysqli_error($conn);
}

//deleting
if (mysqli_query($conn, $sql_delete)) {
    echo "<br>Data deleted successfully!";
} else {
    echo "<br>Error deleting data: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
