<h3>Write a PHP program to Update table data from student database</h3>
// create a databasse student
// create a table TYCO2 with feilds namme rollno etc.
// insert date
// then update date
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to update data in the employee table
$sql = "UPDATE TYCO2 SET name='Junaid' WHERE rollno='1856'";

if (mysqli_query($conn, $sql)) {
    echo "Data updated successfully!";
} else {
    echo "Error updating data: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

//Note database student is not created yet , you need to create it


