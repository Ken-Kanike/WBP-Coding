<h3>Write a simple program to check that emails are valid</h3>
<?php
// Define an array of email addresses to check
$emailAddresses = array(
    "john@example.com",
    "invalid-email",
    "jane@example.com",
    "not_an_email.com"
);

// Loop through each email address and check if it's valid
foreach ($emailAddresses as $email) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "$email is a valid email address.<br>";
    } else {
        echo "$email is NOT a valid email address.<br>";
    }
}
?>

