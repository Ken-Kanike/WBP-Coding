<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pattern = '/^\S+@\S+\.\S+$/';
    if (preg_match($pattern, $_POST['email'])) {
        echo $_POST['email'] . " is a valid email address";
    } else {
        echo $_POST['email'] . " is an invalid email address";
    }
}
?>