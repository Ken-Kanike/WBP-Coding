<?php
        $name = isset($_POST["i1"]) ? trim($_POST["i1"]) : "";
        if (!empty($name)) {
                echo "<h3 id='data' name='data'>Welcome, " . htmlspecialchars($name) . " !</h3>";
        } else {
                echo "<h3 id='data' name='data'>Please provide a username.</h3>";
        }
       
?>
