<h3>Write a program to send and receive mail using PHP</h3>
<?php
     // Example usage: sending an email
     $to = "receiver@example.com";
     $subject = "Test Email";
     $body = "This is a test email sent from PHP.";
     $header = "from:developer@example.com";

     if (mail($to, $subject, $body,$header)) {
            echo "Email sent successfully to $to<br>";
        } else {
            echo "Failed to send email to $to<br>";
        }
?>
<br><br>

<!-- receive email not necessar -->

<?php
// IMAP server settings
$imapPath = "{imap.gmail.com:993/ssl/novalidate-cert}INBOX";
$username = "your_gmail_username";
$password = "your_gmail_password";

// Connect to the IMAP server
$inbox = imap_open($imapPath, $username, $password) or die("Cannot connect to $imapPath: " . imap_last_error());

// Search for unread emails
$emails = imap_search($inbox, 'UNSEEN');

if ($emails) {
    foreach ($emails as $email_number) {
        $headerInfo = imap_headerinfo($inbox, $email_number);
        $from = $headerInfo->fromaddress;
        $subject = $headerInfo->subject;
        $date = $headerInfo->date;

        echo "From: $from<br>";
        echo "Subject: $subject<br>";
        echo "Date: $date<br>";

        $message = imap_fetchbody($inbox, $email_number, 1);
        echo "Message: $message<br>";

        echo "<hr>";
    }
} else {
    echo "No unread emails found in the inbox<br>";
}

// Close the IMAP connection
imap_close($inbox);
?>

