<!-- Create seperate files for create and delete session , modify is extra -->
<html>
<body>
    <h3>Write a Program to start and destroy session</h3>
    <?php 
       // Starting the session
       session_start();
    ?>
</body>
</html>


<html>
<body>
    <?php 
       // Creating session variables
        $_SESSION["username"] = "John";
        $_SESSION["email"] = "john@example.com";

        // Displaying session variables
        echo "Session variables are set.<br>";
        echo "Username: " . $_SESSION["username"] . "<br>";
        echo "Email: " . $_SESSION["email"] . "<br>";
    ?>
</body>
</html>

<html>
<body>
    <?php 
       // Modifying session variables
        $_SESSION["username"] = "Jane";
        $_SESSION["email"] = "jane@example.com";

        // Displaying modified session variables
        echo "<br>Session variables after modification.<br>";
        echo "Username: " . $_SESSION["username"] . "<br>";
        echo "Email: " . $_SESSION["email"] . "<br>";
    ?>
</body>
</html>


<html>
<body>
    <?php 
        // Resetting/deleting session
        session_unset(); // Unsetting all session variables
        session_destroy(); // Destroying the session

        // Attempting to display session variables after resetting/deleting
        echo "<br>Session variables after resetting/deleting.<br>";
        if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
            echo "Username: " . $_SESSION["username"] . "<br>";
            echo "Email: " . $_SESSION["email"] . "<br>";
        } else {
            echo "Session has been reset/deleted.";
        }
    ?>
</body>
</html>