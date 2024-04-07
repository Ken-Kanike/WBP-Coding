<?php
    if(isset($_POST['submit']))
    {
        echo "<br>Customer Name : ".$_POST['cname'];
        echo "<br>Customer Password : ".$_POST['cpass'];
        echo "<br>Customer Number : ".$_POST['cnumber'];
        echo "<br>Customer DOB : ".$_POST['cdob'];
        echo "<br>Customer Address : ".$_POST['caddress'];
    }
?>