<h3>Write a program to create, modify and delete a cookie</h3>
<?php
    // Function to create a cookie
    function createCookie($name, $value) {
        setcookie($name, $value, time() + 3600);//expires in 1 hour
        echo "<br>cookie created";
        echo "<br>Name : ".$_COOKIE[$name];
    }

    // Function to modify a cookie
    function modifyCookie($name, $value) {
        if(isset($_COOKIE[$name])) {
            setcookie($name, $value, time() + 3600);//expires in 1 hour
            echo "<br>cookie modified";
        } else {
            echo "<br>Cookie named '$name' does not exist.";
        }
    }

    // Function to delete a cookie
    function deleteCookie($name) {
        if(isset($_COOKIE[$name])) {
            setcookie($name, "", time() - 3600);// Setting a past time to delete the cookie
            echo "<br>cookie deleted";
        } else {
            echo "<br>Cookie named '$name' does not exist.";
        }
    }

    // Create a cookie named "user" with value "John" 
    createCookie("user", "John");

    // Modify the value of the "user" cookie to "Jane" 
    modifyCookie("user", "Jane");

    //Delete the "user" cookie
    deleteCookie("user");
?>
