<?php
echo "<h3>Data from another srcipt in another file</h3><br>"; 
?>

<?php
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