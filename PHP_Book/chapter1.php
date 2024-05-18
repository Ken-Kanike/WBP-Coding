<?php
// echo "1)Hello World!<br>"; 
//echo '2)Hello World!<br>'; 
#echo ("3)Hello World!<br>");
#$a = 'Hello World!<br>';  
/*echo "4)".$a;
echo `5){$a}`;   #DOES NOT WORKS
echo "6)$a"; 
echo '7){$a}';   #DOES NOT WORKS 
print "Hello World!<br>";
print 'Hello World!<br>';
print("Hello World!<br>");
print $a;
print($a); */
?>

<?php
    include("chapter2.php")
?>

<?php
//php data types
  $int = 10;
  $double = 123.123;
  $str = "hello";
  $bool = true;
  printf("Int = %d <br>Double = %f <br>String = %s <br>Boolean = $bool",$int,$double,$str);  
// constants
  define("MY_CONSTANT",10);
  echo MY_CONSTANT;
?>

<?php
//operators in php 
/*
1) arithmatic  + , -, * , / , % , **
2) relational/comparison == , === , !=/<>, !== , < ,> , <= ,>= 
3) boolean  and/&& , or/|| ,  xor , !
4) increment/decrement $a++ , $a-- , --$a , ++$a
5) bitwise/binary  $ , | , ^ , ~ , << , >>
6) assignment = , += , -= , *= , /= , %=
7) string . , .=
*/
?>

<?php
// decesion making statements
// if
// if - else 
// if elseif else 
// nested if
// switch case
// break
// continue
?>

<?php
// loop controll structures
// while
// do-while
// for
// for each
?>

<?php
// get day switch case 
  $today = getdate();
  switch($today['weekday']){
    case 'Monday': print("<br>Today is Monday");
                  break;
  case 'Tuesday': print("<br>Today is Tuesday");
                  break;
  case 'Wednesday': print("<br>Today is Wednesday");
                  break;
  case 'Thursday': print("<br>Today is Thursday");
                  break;
  case 'Friday': print("<br>Today is Friday");
                  break;
  case 'Saturday': print("<br>Today is Saturday");
                  break;
  case 'Sunday': print("<br>Today is Sunday");
                  break;   
  default : print("Invalid day");
  }
?>


<?php
// leap year
  $date = getdate();
  $year = $date['year'];
  if($year % 4== 1){
    printf("<br>Year %d is not a leap yar",$year);
  } else {
    printf("<br>Year %d is a leap yar",$year);
  }
?>

<?php 
// factorial using loop
  $n = 5;
  $fact = 1;
  for( $i = $n ; $i >= 1 ; $i-- ){
    $fact = $fact * $i;
  }
  echo "<br>Factorial of $n = $fact"
?>

<?php
// fabbo upto 10
  $a = 0;
  $b= 1;
  echo "<br>Fabbonaccii series = $a $b";
  for($i=1 ; $i<=8 ; $i++ ){
    $c = $a + $b;
    $a = $b;
    $b = $c;
    echo " ".$c;
  }
?>

<?php
// reminder progra, using date function 3 and 10
  echo "<br>Today is ".date('d/m/y');
  if(date('d'==3)){
    echo "<br>Dentist Appointment";
  }else if(date('d')==10){
    echo "<br>Go to conference";
  } else {
    echo "<br>No event!";
  }
?>


<?php
       // simple table 1 to 100
        $rows = 10;
        $cols = 10;
        $count = 0;
        echo "<table border='1' style='background-color: cyan;'>";
        for($i = 1 ; $i <= $rows ; $i++)
        {
            echo "<tr>";
            for($j = 1 ; $j <= $cols ; $j++)
            {
                $count += 1;
                echo "<td style='padding:20px;'> $count </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    ?>


    <?php
       // table matrix till 10
        $rows = 10;
        $cols = 10;
        echo "<table border='1' style='background-color: cyan;'>";
        for($i = 1 ; $i <= $rows ; $i++)
        {
            echo "<tr>";
            for($j = 1 ; $j <= $cols ; $j++)
            {
                $product = $i * $j;
                echo "<td style='padding:20px;'> $product </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
    // table for sqaure square root and cube of numbers
    echo "<table border='1' style='background-color: cyan;'>";
    echo "<tr>";
    echo "<th>Number</th>";
    echo "<th>Square root</th>";
    echo "<th>Square</th>";
    echo "<th>Cube</th>";
    echo "</tr>";
    for($i = 1 ; $i <= 10;$i++){
        $sqroot = $i*0.5;
        $square = $i*$i;
        $cube = $i*$i*$i;
        echo "<tr>";
        echo "<td> $i </td>";
        echo "<td> $sqroot </td>";
        echo "<td> $square </td>";
        echo "<td> $cube </td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>