 Define MySQL
 
 SQL commands
CREATE DATABASE dbname;    => creates database
SHOW DATABASES;            => displays all databse names
USE dbname;                => Uses specified database
CREATE TABLE table_name(id INT(4), name VARCHAR(20));       => creates table
SHOW TABLES;                             => displays all table names
DESCRIBE table_name;                     => show colum , rows and other details of table
INSERT INTO table_name VALUES(1,"me");   => inserts data
SELECT * FROM table_name;                => fetch all data
SELECT * FROM table_name WHERE id=1;     => fetch spcific data
SELECT * FROM table_name ORDER BY name;  => fetch sorted by name data
UPDATE table_name SET name="she" WHERE id=4;  =>updates table data
DELETE FROM table_name WHERE id = 3;          => deletes table data
DROP TABLE table_name;                        => deletes table


MySQL data types

List two database operations. 
1. mysqli_connect() 
2. mysqli_close($conn)  
3. mysqli_fetch_array() 
mysqli_fetch_row()
4.mysqli_fetch_assoc() 
5.mysqli_num_rows($result)
6.mysqli_affected_rows()  
7. mysqli_error() 
8.mysqli_connect_error()
9.mysqli_query($conn, $sql)
10.mysqli_multi_query($conn,$sql);
11.die("Connection failed : ".mysqli_connect_error());



Write steps to create database using PHP 
Approcah1 : using PHP code to Creating database with CREATE DATABASE query 
Step 1: Set variables with values for servername, username, password. 
Step 2: Create connection object by passing servername, username, password as parameters. 
Step 3: Create query object with the query as "CREATE DATABASE dbname"; 
Step 4: Execute query with connection object. 
Code - 
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
   
   $sql = "CREATE DATABASE TestDB;";
   
   if(mysqli_query($conn,$sql)){
       echo "<br> Database created successfully!";
   } else {
       die("Something went wrong : ".mysqli_error($conn));
   } 
?> 



mysqli_connect() - Establishes a connection to the MySQL server. 
Syntax: mysqli_connect($host, $username, $password, $database) 
Parameters: 
$host (string) - The hostname of the MySQL server. 
$username (string) - The username for the MySQL server. 
$password (string) - The password for the MySQL server. 
$database (string) - The name of the database to connect to. 
Return type: mysqli - A new MySQLi connection object.
Example:
$host = 'localhost';
$username = 'root';
$password = 'password';
$database = 'mydatabase';
$conn = mysqli_connect($host, $username, $password, $database);


mysqli_close($conn) - When the script ends, the connection with the database also closes. If you want to end the code manually, use 
the mysqli_close function.
Syntax: mysqli_close($conn) 
Parameters: $conn (mysqli) - The MySQLi connection object. 
Return type: void - No value is returned.
Example:
mysqli_close($conn);


mysqli_fetch_array() - Fetches a result row as an associative array, a numeric array, or both.
Syntax: mysqli_fetch_array($result, $resulttype) 
Parameters: 
$result (mysqli_result) - The result object. 
$resulttype (integer) - The type of array to return. It can be MYSQLI_BOTH (default), MYSQLI_ASSOC, or MYSQLI_NUM. 
Return type: array - An array containing the next result row.
Example:
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


mysqli_fetch_assoc() - Fetches a result row as an associative array. 
Syntax: mysqli_fetch_assoc($result)
Parameters: $result (mysqli_result) - The result object. 
Return type: array - An associative array containing the next result row.
Example:
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


mysqli_num_rows($result) 
Syntax: mysqli_num_rows($result) 
Parameters: $result (mysqli_result) - The result object. 
Return type: integer - The number of rows in the result set.
Example:
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);


mysqli_affected_rows() 
Syntax: mysqli_affected_rows($conn) 
Parameters: $conn (mysqli) - The MySQLi connection object. 
Return type: integer - The number of rows affected by the last INSERT, UPDATE, REPLACE or DELETE query.
Example:
$affected_rows = mysqli_affected_rows($conn);


mysqli_error() 
Syntax: mysqli_error($conn) 
Parameters: $conn (mysqli) - The MySQLi connection object. 
Return type: string - The last error message.
Example:
$error = mysqli_error($conn);

mysqli_connect_error() 
Syntax: mysqli_connect_error() 
Parameters: None. 
Return type: string - The last connection error message.
Example:
$connect_error = mysqli_connect_error();


mysqli_query($conn, $sql) 
Syntax: mysqli_query($conn, $sql) 
Parameters: 
$conn (mysqli) - The MySQLi connection object. 
$sql (string) - The SQL query to execute. 
Return type: mysqli_result - A result object.
Example:
$sql = "SELECT * FROM mytable";
$result = mysqli_query($conn, $sql);


mysqli_multi_query($conn,$sql); 
Syntax: mysqli_multi_query($conn,$sql) 
Parameters: 
$conn (mysqli) - The MySQLi connection object. 
$sql (string) - The SQL query to execute. 
Return type: boolean - TRUE on success or FALSE on failure.
Example:
$sql = "SELECT * FROM mytable; SELECT * FROM mytable2";
mysqli_multi_query($conn,$sql);


die("Connection failed : ".mysqli_connect_error()); 
Syntax: die("Connection failed : ".mysqli_connect_error()) 
Parameters: None. 
Return type: void - Terminates the script and prints the connection error message.
Example:
if (!$conn) {
    die("Connection failed : ". mysqli_connect_error());
}


