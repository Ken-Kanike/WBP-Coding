<h3>Write a PHP code to insert data into employee table</h3>
// create a databasse for emp table
// create a employee table
// insert date
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

// SQL query to insert single record into the employee table
$sql = "INSERT INTO employee (ename, edept, esalary) VALUES ('Henry Kevil', 'Engineering', 70000.00)";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
