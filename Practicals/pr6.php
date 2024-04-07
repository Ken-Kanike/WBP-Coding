<h3>Write a program to demonstrate anonymous function.  </h3>
<?php
$add = function($a, $b) {
    return $a + $b;
};

echo "Sum: " . $add(5, 3);
?>

<br><br>


<h3>Write a program to demonstrate parameterized function</h3>
<?php
function greet($name) {
    echo "Hello, $name!";
}

greet("John");

?>

