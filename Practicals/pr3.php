<h3> Program to print first 30 even numbers using for, while, do..while loops</h3>
<?php
    echo "<br>Using for loop: ";
    for($i = 2; $i <= 60; $i += 2) {
        echo $i . " ";
    }

    echo "<br>Using while loop: ";
    $i = 2;
    while($i <= 60) {
        echo $i . " ";
        $i += 2;
    }

    echo "<br>Using do..while loop: ";
    $i = 2;
    do {
        echo $i . " ";
        $i += 2;
    } while($i <= 60);

?>

<br><br>

<h3> Write any program using if condition with for loop.</h3>
<?php
    for($i = 1; $i <= 10; $i++) {
        if($i % 2 == 0) {
            echo "$i is even.<br>";
        } else {
            echo "$i is odd.<br>";
        }
    }
?>

<br><br>


<h3> Write a program to display pyramids of star/patterns using increment/decrements</h3>
<?php
    $rows = 5;
    for($i = 1; $i <= $rows; $i++) {
        for($j = 1; $j <= $rows - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        echo "<br>";
    } 
?>

<br><br>