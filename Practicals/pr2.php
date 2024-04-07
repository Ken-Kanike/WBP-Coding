<h3> Program to find if a given number is even or odd </h3>
<?php
    $num = 10;
    if($num % 2 == 0) {
        echo "$num is even.";
    } else {
        echo "$num is odd.";
    }
?>

<br><br>

<h3> Program to make use of logical operators ( to check positve negative and odd even)</h3> 
<?php
    $num1 = -5;
    if($num1 == 0){
        echo "$num1 is Zero";
    } else if($num1 % 2 == 0 && $num1 > 0) {
        echo "$num1 is Even and Positive";
    } elseif ($num1 % 2 == 0 && $num1 < 0) {
        echo "$num1 is Even and Negative";
    } else if($num1 > 0) {
        echo "$num1 is Odd and Positive";
    } else {
        echo "$num1 is Odd and Negative";
    }
?>


<br><br>

<h3> Program to check if a number is positive or negative</h3> 
<?php
    $num2 = 0; 
    if($num2 > 0) {
        echo "$num2 is positive.";
    } elseif ($num2 < 0) {
        echo "$num2 is negative.";
    } else {
        echo "$num2 is zero.";
    }
    
?>

<br><br>

<h3> Calendar program using switch statement</h3> 
<?php
   $month = 2; 
   switch($month) {
       case 1:
           echo "January";
           break;
       case 2:
           echo "February";
           break;
       case 3:
           echo "March";
           break;
       case 4:
           echo "April";
           break;
       case 5:
           echo "May";
           break;
       case 6:
           echo "June";
           break;
       case 7:
           echo "July";
           break;
       case 8:
           echo "August";
           break;
       case 9:
           echo "September";
           break;
       case 10:
           echo "October";
           break;
       case 11:
           echo "Nobember";
           break;
       case 12:
           echo "December";
           break;
      
       default:
           echo "Invalid month";
   
   }  
?>