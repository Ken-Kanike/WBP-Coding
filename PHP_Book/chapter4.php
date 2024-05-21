<html>
<body>

    <h3>Form Controll</h3>
    <form action="demoServer.php" method="POST" name="form1" target="_self" style="padding:50px;">
    <br><br>Text Box <input name="tb" size="30" value="" maxlength="10" placeholder="Enter name"/>
    <br><br>Text Area <textarea name="ta" rows="5" cols="40"></textarea>
    <br><br>Radio Btn <input type="radio" name="gender" value="male"/>Male 
    <input type="radio" name="gender" value="female"/>Female
    <br><br> Checkbox <input type="checkbox" name="checklist[]" value="mango" checked/>mango
    <input type="checkbox" name="checklist[]" value="apple"/>apple
    <input type="checkbox" name="checklist[]" value="grapes"/>grapes 
    <br><br>List
    <select name="language[]" multiple>
        <option value="c">c</option>
        <option value="c++">c++</option>
        <option value="java">java</option>
        <option value="python">python</option>
    </select>
    <br><br> <input type="submit" name="submit" value="submit"/>
    <br><br> <input type="reset"  value="clear"/>
    </form>
    <?php
    if(isset($_POST['submit'])){
        echo "<br>Hello ,". $_POST['tb'];
        echo "<br>Message = ". $_POST['ta'];
        $gender = $_POST['gender'];
        if($gender!=null){
            echo "<br>Im a ". $_POST['gender'];
        }
        if(!empty($_POST['checklist'])){
            echo "<br>You have selected = ";
            // loop to get values
            foreach($_POST['checklist'] as $choice){
                echo " ".$choice;
            }
        }
        echo "<br>You have selected = ";
        foreach($_POST['language'] as $sub){
            echo "  ".$sub;
        }
    }
    ?>



    <h3>Get name and find length</h3> <!-- same for odd even , sum of n numbers etc-->
    <form action="demoServer.php" method="POST">
        <input type="text" name="name" placeholder="Enter Name"/><br>
        <input type="submit" name="findlen" value="Find lenghth"/>
    </form>
    <?php
    if(isset($_POST['findlen']))
    {
        echo "<br>Name : ".$_POST['name'];
        echo "<br>Name length = ".strlen($_POST['name']);
    }
    ?>




    <h3>Form using table</h3>
    <form action="demoServer.php" method="POST">
        <table border="2">
            <tr>
                <th>Name :</th>
                <td><input name="name"/></td>
            </tr>
            <tr>
                <th>Email :</th>
                <td><input type="email" name="email"/></td>
            </tr>
            <tr>
                <th>Gender :</th>
                <td>
                    <input type="radio" name="gender" value="male"/> Male<br>
                    <input type="radio" name="gender" value="female"/> Female
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
    <?php
        $name = "";
        $email = "";
        $gender = "";

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name = $_POST['name'];
            $email =$_POST['email'];
            $gender =$_POST['gender'];
        }
    ?>
    <center>
        <table border="1">
            <tr>
                <th colspan="2"><h4>Your Details</h4></th>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $gender; ?></td>
            </tr>
        </table>
    </center>


    
    <h3>Handling Multiple forms in single page</h3>
    <form method="POST">
        <h4>Enter your details</h4>
        <input type="text" name="name" placeholder="Enter name"/><br><br>
        <button type="submit" name="submitname">Submit</button>
    </form>
    <form method="POST">
        <h4>Enter your feedback</h4>
        <textarea name="feedback" placeholder="It was nice!.."></textarea><br><br>
        <button type="submit" name="submitfeedback">Submit</button>
    </form>
    <?php
       if(isset($_POST['submitname'])){
         echo "<br><h3>Welcome,".$_POST['name']."</h3>";
       }

       if(isset($_POST['submitfeedback'])){
          echo "<br><h3> Thanx for sharing your feedback</h3>";
       }
   ?>



    <center>
    <h3>Handling forms with Multiple submit button in single page</h3>
    <form method="POST">
        <h4>calculator</h4><br><hr><br>
        Enter num 1 <input type="number" name="n1"/><br><br>
        Enter num 2 <input type="number" name="n2"/><br><br>
        <button type="submit" name="add">Addition</button>
        <button type="submit" name="sub">Subtraction</button>
        <button type="submit" name="mul">Multiplication</button>
        <button type="submit" name="div">Division</button>
    </form>
    <br><hr><br>
    <?php
        if(isset($_POST['add'])){
            $result = $_POST['n1'] + $_POST['n2'];
            echo "<h3>Sum = ".$result."</h3>";
        }
        if(isset($_POST['sub'])){
            $result = $_POST['n1'] - $_POST['n2'];
            echo "<h3>Difference = ".$result."</h3>";
        }
        if(isset($_POST['mul'])){
            $result = $_POST['n1'] * $_POST['n2'];
            echo "<h3>Product = ".$result."</h3>";
        }
        if(isset($_POST['div'])){
            $result = $_POST['n1'] / $_POST['n2'];
            echo "<h3>Quotient = ".$result."</h3>"; 
        }
        switch($_REQUEST['submit']){
            case 'ADD' : echo $n1 +$n2; break; // <input type="submit" name="submit" value"add"/>
            //......
        }
    ?>
    <br><hr><br>
   </center>





   <h3>name input validation</h3>
    <form action="demoServer.php" method="POST">
        <input type="text" name="name" placeholder="Enter Name" required/>
        <span>* required </span><br>
        <input type="submit" name="validate" value="validate"/>
    </form>
    <?php
        if(isset($_POST['validate']))
        {
            $name = test_input($_POST['name']);
            if(!preg_match("/^[a-zA-Z]*$/",$name)){
                echo "Enter only letters!";
            } else {
                echo"Welcome , ".$name;
            }
        }
        function test_input($data){
            $data = trim($data);  // removes white spaces
            $data = stripslashes($data); // unquotes a quoted string
            $data = htmlspecialchars($data); // converts spcials chars into html entities
            return $data; // returns processed name
        }
    ?>





    <h3>email input validation</h3>
    <form action="demoServer.php" method="POST">
        <input type="email" name="email" placeholder="Enter Email" required/>
        <span>* required </span><br>
        <input type="submit" name="validate" value="validate"/>
    </form>
    <?php
    if(isset($_POST['validate']))
        {
            $email = test_input2($_POST['email']);
            if(!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)){ #not a proper regx
                echo "Invalid Email!";
            } else {
                echo"Your Email =  , ".$email;
            }
        }
        function test_input2($data){
            $data = trim($data);  // removes white spaces
            $data = stripslashes($data); // unquotes a quoted string
            $data = htmlspecialchars($data); // converts spcials chars into html entities
            return $data; // returns processed name
        }
    ?>





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






    <h3>Write a program to send and receive mail using PHP</h3>
    <?php
        // Example usage: sending an email
        $to = "receiver@gmail.com";
        $subject = "Test Email";
        $body = "This is a test email sent from PHP.";
        $header ="from:junaidshaikh7722@gmail.com";

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




</body>
</html>




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