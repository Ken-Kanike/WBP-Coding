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

// 1st Way .. SQL query to insert multiple records into the employee table
$sql = "INSERT INTO employee (ename, edept, esalary) VALUES ('emp5', 'Engineering', 50000.00);";
$sql.= "INSERT INTO employee (ename, edept, esalary) VALUES ('emp6', 'Engineering', 50000.00);";
$sql.= "INSERT INTO employee (ename, edept, esalary) VALUES ('emp7', 'Engineering', 50000.00);";

$result = mysqli_multi_query($conn,$sql);
if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

//Note Use the 1st way

// 2nd Way  .. SQL query to insert multiple records into the employee table
$sql = "INSERT INTO employee (ename, edept, esalary) VALUES ('Smith Shane', 'Engineering', 50000.00),
        ('Jane Smith', 'Marketing', 60000.00),
        ('Alice Johnson', 'HR', 55000.00)";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>
