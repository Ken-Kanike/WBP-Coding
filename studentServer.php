<?php
    if(isset($_POST['submit']))
    {
        echo "<br>First Name : ".$_POST['fname'];
        echo "<br>Last Name : ".$_POST['lname'];
        echo "<br>Roll no : ".$_POST['rno']; 
        echo "<br>DOB : ".$_POST['dob'];
        echo "<br>Branch : ".$_POST['branch'];
        echo "<br>Address : ".$_POST['address'];
        echo "<br>Password : ".$_POST['pass'];
    }
?>