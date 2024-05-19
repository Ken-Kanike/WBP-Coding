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