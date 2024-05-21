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

// SQL query to fetch data from the employee table
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // echo "No of rows retreived :" ,mysqli_num_rows($result);
    // echo "<br><br>Retreived Data as array : <br>";
    // print_r(mysqli_fetch_assoc($result));

    echo "<br><br>Retreived Data: <br>";
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " - Name: " . $row["ename"]. " - Department: " . $row["edept"]. " - Salary: " . $row["esalary"]. "<br>";
    }
} else {
    echo "No records found";
}

// Close connection
mysqli_close($conn);
?>
