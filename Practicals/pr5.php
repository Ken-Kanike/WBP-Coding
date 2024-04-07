<h3> Write a PHP program to Calculate length of string.</h3>
<?php
    $str = "Hello, World!";
    echo "Length of the string: " . strlen($str);
?>

<br><br>

<h3> Write a PHP program to Count the number of words in string without using string functions.</h3>
<?php
    $str = "This is a sample sentence.";
    $wordCount = str_word_count($str);
    echo "Number of words in the string: $wordCount";
?>

<br><br>

<h3> Write a program to demonstrate PHP maths function.</h3>
<?php
    echo "Square root of 16: " . sqrt(16) . "<br>";
    echo "Power of 4 with 2: " . pow(4, 2) . "<br>";
    echo "Absolute value of -10: " . abs(-10). "<br>";
    echo "Value of PI: " . pi(). "<br>";
    echo "Minimum value in (10,20,30,40): " .min(10,20,30,40). "<br>";
    echo "Maximum value in (10,20,30,40): " .max(10,20,30,40). "<br>";
    echo "Round off of(6.67):" . round(6.67). "<br>";
    echo "Random number between 1-50:" . rand(1,50). "<br>";
    echo "Floor of 3.6: " . floor(3.6) . "<br>";
    echo "Ceiling of 3.3: " . ceil(3.3) . "<br>";
    // extras
    echo "Exponential of 2: " . exp(2) . "<br>";
    echo "Logarithm of 10: " . log(10) . "<br>";
    echo "Base-10 logarithm of 10: " . log10(10) . "<br>";
    echo "Sine of 0 radians: " . sin(0) . "<br>";
    echo "Decimal to binary of 3: " . decbin(3) . "<br>";
    echo "Binary to decimal of 11: " . bindec('11') . "<br>";
    echo "Decimal to hexadecimal of 10: " . dechex(10) . "<br>";
    echo "Hexadecimal to decimal of a: " . hexdec('a') . "<br>";
    echo "Decimal to octal of 8: " . decoct(8) . "<br>";
    echo "Octal to decimal of 10: " . octdec('10') . "<br>";
?>

<br><br>