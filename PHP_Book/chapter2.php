<?php
echo "<h3>Data from another srcipt in another file</h3><br>"; 
?>

<?php  /*
// array()   => creates array
// $arr[] = "abc"  => adds element to next index
// isset() => check value present or not
// unset() => delets value / element
// array_values() => returs values / used to remove gaps
// print_r() => prints array with index
?>

<?php // array types
// index => int index
// associative => str index
// multi dimensional => arrays inside array
?>

<?php  //extract() function  :  array => variable
//syntax =   int extract($arra_var , $rules , $prefix);

//using only one args   => we can access array keys as vars
    $fruits1 = array('a'=> 'apple' , 'b'=>'banana' ,'c'=> 'cherry');
    extract($fruits1);
    echo "<br> a = $a , b = $b , c = $c";

// using all rest args
//  $rules =>
// EXTR_OVERWRITE   => ovverides the var value
// EXTR_SKIP        => prints the var value instead array
// EXTR_PREFIX_SAME  => if used with prefix key then only acces array else the var 
// EXTR_PREFIX_ALL   => it is compalsory to used with prefix key then only acces array all elements else the var 

// EXTR_OVERWRITE  
    $a = "apricot";
    echo "<br> a = $a";
    $fruits2 = array('a'=> 'apple' , 'b'=>'banana' ,'c'=> 'cherry');
    extract($fruits2 , EXTR_OVERWRITE);
    echo "<br> a = $a , b = $b , c = $c";

// EXTR_SKIP   
    $a = "apricot";
    echo "<br> a = $a";
    $fruits2 = array('a'=> 'apple' , 'b'=>'banana' ,'c'=> 'cherry');
    extract($fruits2 , EXTR_SKIP);
    echo "<br> a = $a , b = $b , c = $c";

// EXTR_PREFIX_SAME   
    $a = "apricot";
    echo "<br> a = $a";
    $fruits2 = array('a'=> 'apple' , 'b'=>'banana' ,'c'=> 'cherry');
    extract($fruits2 , EXTR_PREFIX_SAME,"test");
    echo "<br> a = $a , b = $b , c = $c , test_a = $test_a";

// EXTR_PREFIX_ALL  
    $a = "apricot";
    echo "<br> a = $a";
    $fruits2 = array('a'=> 'apple' , 'b'=>'banana' ,'c'=> 'cherry');
    extract($fruits2 , EXTR_PREFIX_ALL , "test");
    echo "<br> a = $a , test_b = $test_b , test_c = $test_c , test_a = $test_a <br>";
?>

<?php // compact()  var => array
    $a = "apple";
    $b = "banana";
    $c = "cherry";
    $new_fruits = compact('a', 'b', 'c');
    print_r($new_fruits);
?>


<?php // implode() array => string
    $fruits = array('apple', 'banana', 'cherry');
    $fruits_string = implode(', ', $fruits);
    echo "<br>Fruits: $fruits_string";
?>

<?php  // explode() string => array
    $fruits_string = 'apple,banana,cherry';
    $fruits = explode(',', $fruits_string);
    echo "<br>";
    print_r($fruits);
?>


<?php  // array_flip()    values => keys   && keys => values
    $fruits = array('a'=> 'apple' , 'b'=>'banana' ,'c'=> 'cherry');
    echo "<br>Before flip : ";
    print_r($fruits);
    $fruits = array_flip($fruits);
    echo "<br>After flip : ";
    print_r($fruits);
?>

<?php  // Travering array
    $fruits = array('apple', 'banana', 'cherry');
//1)  current and next pointer
    echo "<br> The current value in current pointer is ".current($fruits);
    echo "<br> The next value is ".next($fruits);
    echo "<br> The next value is ".next($fruits);
    echo "<br> The next value is ".next($fruits); # null

//2) using each() function  // deprecated
// while($element =each($fruits)){
//     $element_key = $element['key'];
//     $element_value = $element['value'];
//     echo "<br>Fruits[$element_key] = $element_value";
// }

//3) using for each
    foreach( $fruits as $fruit){
        echo "<br> Fruits = <b>$fruit</b>";
    }
//or
    foreach ($fruits as $key => $value) {
        echo "<br> Fruits[ $key ] = <b>$value</b>";
    }

//4) using for loop
    for ($i = 0; $i < count($fruits); $i++) {
        echo "<br>fruits[$i] = " . $fruits[$i];
    }  
?>


<?php //Function types
//1) user defined function
    function myfunc1(){
        echo "<br>This is default user def funtion";
    }
    myfunc1();

//2) return keyword
    function myfunc2(){
        return "<br>This is funtion with reuturn";
    }
    echo myfunc2();
//3) parameterized function (pass by value // by deafult)  // value dosnt changes outside
     $var = 'This is a string ';
     echo "<br>before pass by value var = $var";
    function myfunc3( $val ){
        $val = 'The string is replaced';
    }
    myfunc3($var);
    echo "<br>after pass by value var = $var";

//4) parameterized function (pass by reference )  // value changes outside
   $var = 'This is a string ';
    echo "<br>before pass by ref var =  $var ";
   function myfunc4( &$val ){
       $val = 'The string is replaced';
   }
   myfunc4( $var );
   echo "<br>after pass by ref var =  $var ";

//5) variable function
    function myfunc5(){
        echo "<br>This is variable funtion";
    }
    $var_func = 'myfunc5';
    $var_func();  //$ sign imp

//6) anonymous function // no function name , ; at the end
    $str = "<br>This is an anonymous function.";
    $ano_func = function($string) {
        return $string;
    };
    echo $ano_func($str); // $ imp

//7) function with return type  
    function myfunc6($n) : int {
        return $n**2;
    }
    echo "<br>Square of 5 = ".myfunc6(5);
?>

<?php //string functions  
    $str = "This is a sample sentence.";
    echo "<br>1 String length = ". strlen($str); // Returns the length of the string $str
    echo "<br>2 String comparison = ". strcmp($str, "This is a sample sentence."); // Compares the string $str with the string "This is a sample sentence." and returns 0 if they are equal, a negative value if $str is less than the second string, or a positive value if $str is greater than the second string
    echo "<br>3 String to lower case = ". strtolower($str); // Converts the string $str to lowercase
    echo "<br>4 String to upper case = ". strtoupper($str); // Converts the string $str to uppercase
    echo "<br>5 Trimmed string = ". trim($str); // Removes any leading and trailing whitespace from the string $str
    echo "<br>6 Position of 'ample' = ". strpos($str, "sample"); // Returns the position of the first occurrence of the string "sample" in the string $str, or false if it's not found
    echo "<br>7 Last position of 'ample' = ". strrpos($str, "sample"); // Returns the position of the last occurrence of the string "sample" in the string $str, or false if it's not found
    echo "<br>8 Reversed string = ". strrev($str); // Reverses the string $str
    echo "<br>9 Word count = ". str_word_count($str); // Returns the number of words in the string $str
    echo "<br>10 Replaced string = ". str_replace("sample", "example", $str); // Replaces all occurrences of the string "sample" in the string $str with the string "example"
    echo "<br>11 Substring = ". substr($str, 0, 10); // Returns a substring of the string $str starting from the first character and ending at the 10th character
    echo "<br>12 String split = ". implode(", ", str_split($str, 5)); // Splits the string $str into an array of strings, each with a length of 5 characters
    echo "<br>13 String chunk split = ". implode(", ", str_split($str, 5)); // Splits the string $str into an array of strings, each with a length of 5 characters
    echo "<br>14 String shuffle = ". str_shuffle($str); // Shuffles the characters in the string $str
    echo "<br>15 String repeat = ". str_repeat($str, 2); // Repeats the string $str 2 times
    echo "<br>16 String pad left = ". str_pad($str, 30, "*", STR_PAD_LEFT); // Pads the string $str on the left with 30 "*" characters
    echo "<br>17 String pad right = ". str_pad($str, 30, "*", STR_PAD_RIGHT); // Pads the string $str on the right with 30 "*" characters
    echo "<br>18 String pad both = ". str_pad($str, 30, "*", STR_PAD_BOTH); // Pads the string $str on both sides with 30 "*" characters
    echo "<br>19 String truncate = ". substr($str, 0, 10); // Returns a substring of the string $str starting from the first character and ending at the 10th character
    echo "<br>20 String similarity = ". similar_text($str, "This is another sample sentence.", $percent); // Calculates the similarity between the string $str and the string "This is another sample sentence." and returns the percentage of similarity
    echo "<br>21 Percent similarity = ". $percent; // Returns the percentage of similarity between the two strings
    echo "<br>22 String contains = ". strstr($str, "sample"); // Returns the first occurrence of the string "sample" in the string $str
    echo "<br>23 String starts with = ". strncmp($str, "This", 5); // Compares the first 5 characters of the string $str with the string "This" and returns 0 if they are equal, a negative value if $str is less than the second string, or a positive value if $str is greater than the second string
    // echo "<br>24 String ends with = ". strripos($str, "sentence.")!== false; // Returns true if the string $str ends with the string "sentence.", false otherwise
    // echo "<br>25 String count characters = ". count_chars($str, 1); // Returns an array with the count of each character in the string $str
    echo "<br>26 String add slashes = ". addcslashes($str, 'A..z'); // Adds slashes to the string $str before any character in the range 'A' to 'z'
    echo "<br>27 String remove slashes = ". stripslashes($str); // Removes slashes from the string $str
    echo "<br>28 String convert to HTML entities = ". htmlentities($str); // Converts the string $str to HTML entities
    echo "<br>29 String convert from HTML entities = ". html_entity_decode($str); // Converts the string $str from HTML entities to their corresponding characters
?>

<?php //maths function
    echo "Square root of 16: " . sqrt(16) . "<br>"; // Returns the square root of 16
    echo "Power of 4 with 2: " . pow(4, 2) . "<br>"; // Returns the value of 4 raised to the power of 2
    echo "Absolute value of -10: " . abs(-10). "<br>"; // Returns the absolute value of -10
    echo "Value of PI: " . pi(). "<br>"; // Returns the value of PI
    echo "Minimum value in (10,20,30,40): " .min(10,20,30,40). "<br>"; // Returns the minimum value in the list of numbers
    echo "Maximum value in (10,20,30,40): " .max(10,20,30,40). "<br>"; // Returns the maximum value in the list of numbers
    echo "Round off of(6.67):" . round(6.67). "<br>"; // Rounds off the value of 6.67 to the nearest integer
    echo "Random number between 1-50:" . rand(1,50). "<br>"; // Generates a random number between 1 and 50
    echo "Floor of 3.6: " . floor(3.6) . "<br>"; // Returns the largest integer less than or equal to 3.6
    echo "Ceiling of 3.3: " . ceil(3.3) . "<br>"; // Returns the smallest integer greater than or equal to 3.3
    
    // Extras
    echo "Exponential of 2: " . exp(2) . "<br>"; // Returns the value of e raised to the power of 2
    echo "Logarithm of 10: " . log(10) . "<br>"; // Returns the natural logarithm of 10
    echo "Base-10 logarithm of 10: " . log10(10) . "<br>"; // Returns the base-10 logarithm of 10
    echo "Sine of 0 radians: " . sin(0) . "<br>"; // Returns the sine of 0 radians
    echo "Decimal to binary of 3: " . decbin(3) . "<br>"; // Returns the binary representation of the decimal number 3
    echo "Binary to decimal of 11: " . bindec('11') . "<br>"; // Returns the decimal representation of the binary number 11
    echo "Decimal to hexadecimal of 10: " . dechex(10) . "<br>"; // Returns the hexadecimal representation of the decimal number 10
    echo "Hexadecimal to decimal of a: " . hexdec('a') . "<br>"; // Returns the decimal representation of the hexadecimal number a
    echo "Decimal to octal of 8: " . decoct(8) . "<br>"; // Returns the octal representation of the decimal number 8
    echo "Octal to decimal of 10: " . octdec('10') . "<br>"; // Returns the decimal representation of the octal number 10
    
?>


<?php
// Array functions
$array = array(10,20,30,40,50,60,70);
echo "Sum of array elements: " . array_sum($array). "<br>"; // Returns the sum of all elements in an array
echo "Product of array elements: " . array_product($array). "<br>"; // Returns the product of all elements in an array
echo "Array split into chunks of size 3: " . print_r(array_chunk($array, 3)). "<br>"; // Splits an array into chunks of a specified size
echo "Values of column 'name' from array: " . print_r(array_column($array, 'name')). "<br>"; // Returns a new array containing the values of a single column from the input array
echo "New array with keys from array1 and values from array2: " . print_r(array_combine($keys, $values)). "<br>"; // Creates a new array by using one array for keys and another for its values
echo "Count of values in array: " . print_r(array_count_values($array)). "<br>"; // Counts all the values of an array
echo "Values in array1 that are not present in array2: " . print_r(array_diff($array1, $array2)). "<br>"; // Returns the values in `$array1` that are not present in `$array2`
echo "Values that are present in both array1 and array2: " . print_r(array_intersect($array1, $array2)). "<br>"; // Returns the values that are present in both `$array1` and `$array2`
echo "Check if key 'name' exists in array: " . print_r(array_key_exists('name', $array)). "<br>"; // Checks if the given key or index exists in an array
echo "Keys of array: " . print_r(array_keys($array)). "<br>"; // Returns all the keys or indices of an array
echo "Apply callback function to elements of array1 and array2: " . print_r(array_map($callback, $array1, $array2)). "<br>"; // Applies the callback function to the elements of the given arrays
echo "Merge array1 and array2: " . print_r(array_merge($array1, $array2)). "<br>"; // Merges one or more arrays
echo "Pop element off the end of array: " . print_r(array_pop($array)). "<br>"; // Pops the element off the end of array
echo "Push one or more values onto the end of array: " . print_r(array_push($array, $value1, $value2)). "<br>"; // Pushes one or more values onto the end of array
echo "Shift an element off the beginning of array: " . print_r(array_shift($array)). "<br>"; // Shifts an element off the beginning of array
echo "Prepend one or more elements to the beginning of an array: " . print_r(array_unshift($array, $value1, $value2)). "<br>"; // Prepends one or more elements to the beginning of an array
echo "Remove duplicate values from an array: " . print_r(array_unique($array)). "<br>"; // Removes duplicate values from an array
echo "Values of array: " . print_r(array_values($array)). "<br>"; // Returns all the values of an array
echo "Number of elements in array: " . print_r(count($array)). "<br>"; // Returns the number of elements in an array
echo "Current element in array: " . print_r(current($array)). "<br>"; // Returns the current element in an array
echo "Advance the internal array pointer to the last element: " . print_r(end($array)). "<br>"; // Advances the internal array pointer to the last element
echo "Advance the internal array pointer to the next element: " . print_r(next($array)). "<br>"; // Advances the internal array pointer to the next element
echo "Rewinds the internal array pointer to the first element: " . print_r(reset($array)). "<br>"; // Rewinds the internal array pointer to the first element
echo "Sort an array: " . print_r(sort($array)). "<br>"; // Sorts an array
echo "Sort an array in reverse order: " . print_r(rsort($array)). "<br>"; // Sorts an array in reverse order
echo "Sort an array and maintain index association: " . print_r(asort($array)). "<br>"; // Sorts an array and maintains index association
echo "Sort an array in reverse order and maintain index association: " . print_r(arsort($array)). "<br>"; // Sorts an array in reverse order and maintains index association
echo "Sort an array by key: " . print_r(ksort($array)). "<br>"; // Sorts an array by key
echo "Sort an array by key in reverse order: " . print_r(krsort($array)). "<br>"; // Sorts an array by key in reverse order 
?>

<?php // Image   
// creating image
// syntax :  $img_var = imagecreate(width , height);
//JPEG
    $img = imagecreate(300,300);
    imagejpeg($img);
    header('Content-Type:image/jpeg');
//PNG
    $img = imagecreate(300,300);
    imagepng($img);
    header('Content-Type:image/png');
//WBMP
    $img = imagecreate(300,300);
    imagewbmp($img);
    header('Content-Type:image/vnd.wap.wbmp');

// color image
// syntax : imagecolorallocate(image , color); where color = r,g,b
    $img = imagecreate(300,300);
    $red = imagecolorallocate($img,255,0,0);
    imagejpeg($img);
    header('Content-Type:image/jpeg');

//image text
// syntax : imagestring($image , font , x , y , text , color ); where color = r, g , b
    $image = imagecreate(300,200);
    $white = imagecolorallocate($image,255,255,255);
    $red = imagecolorallocate($image,255,0,0);
    imagefilledrectangle($image,50,50,100,100,$white);
    imagestring($image,5,50,120,"Welcome",$red);
    imagejpeg($image);
    header('Content-Type:image/jpeg');


// resize images
// imagecopyresampled($dest_image , $res_image ,$dest_x , $dest_y , $src_x, $src_y ,$dest_w , $dest_h , $src_w, $src_h );

    $image = imagecreatefromjpeg("C:/xampp/htdocs/WBP Coding/PHP_Book/house.jpeg");
    $width = imagesx($image);
    $heigth = imagesy($image);
    $x = $width/2;
    $y = $heigth/2;
    $scaled_img = imagecreatetruecolor($x,$y);
    imagecopyresampled($scaled_img,$image,0,0,0,0,$x,$y,$width,$heigth);
    header('Content-Type:image/png');
    imagepng($image); 
    */
?>
<?php  // pdf 

require("C:/xampp/php/pear/fpdf/fpdf.php");

// Create instance of the FPDF class
$pdf = new FPDF();

// Add a new page to the PDF
$pdf->AddPage();

// Set the font for the PDF
$pdf->SetFont('Arial', 'B', 16);

// Add a cell with text
$pdf->Cell(40, 10, 'Hello World!...........');

// Output the PDF to the browser
$pdf->Output();
?>