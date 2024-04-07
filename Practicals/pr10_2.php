<?php
    $name = "";
    $email = "";
    $gender = "";
    $comment = "";

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name = test_input($_POST['name']);
        $email =  test_input($_POST['email']);
        $gender =  test_input($_POST['gender']);
        $comment =  test_input($_POST['comment']);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    echo "<h3>Your Details</h3>";
    echo "<br>Name :".$name;
    echo "<br>Email :".$email;
    echo "<br>Gender :".$gender;
    echo "<br>Comment :".$comment;
?>