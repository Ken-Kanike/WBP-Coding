<h3> Develop a program to using Indexed array.</h3>
<?php
  echo "1st way...<br>";
  $fruits = array("Apple", "Banana", "Orange", "Mango");
  echo "Indexed array elements:<br>";
  foreach ($fruits as $fruit) {
      echo $fruit . "<br>";
  }

  echo "<br>2nd way...<br>";
  $fruits = array(1 => "Apple", 2 => "Banana", 3 => "Orange", 4 => "Mango");
  echo "Indexed array elements:<br>";
  for ($i = 1; $i <= count($fruits); $i++) {
      echo "[$i] = " . $fruits[$i] . "<br>";
  }  
  
?>

<br><br>

<h3> Develop a program to using Associative array.</h3>
<?php
  $student = array("name" => "John", "age" => 20, "grade" => "A");
  echo "Associative array elements:<br>";
  foreach ($student as $key => $value) {
      echo "$key: $value<br>";
  }
?>

<br><br>

<h3> Develop a program to using Multidimensional array.</h3>
<?php
   echo "1st way... Indexed Array<br>";
   $class = array(
    // student[0] , student[1] , student[2] ,student[3]
    array("John", 80, 75, 85),  //class[0]
    array("Alice", 90, 85, 88),  //class[1]
    array("Bob", 70, 65, 72)   //class[2]
   );

    echo "Multidimensional array elements:<br>";
    foreach ($class as $student) {
        echo "Name: " . $student[0] . ", Marks: " . $student[1] . ", " . $student[2] . ", " . $student[3] . "<br>";
    }

    // do the above one
    echo "<br>2nd way...Associative Array<br>";
    $class2 =array(
        "John" => array("Physics" =>  80 , "Maths" => 75 , "Chemistry" => 85),
        "Alice" => array("Physics" => 90 , "Maths" => 85 , "Chemistry" => 88),
        "Bob" => array("Physics" => 70 , "Maths" => 65 , "Chemistry" => 72)
    );

    echo "Marks of Alice in Chemistry = ";
    echo $class2['Alice']['Chemistry'];

    foreach ($class2 as $student => $subjects) {
        echo "<br>Name: " . $student." [ ";
        foreach ($subjects as $subject => $mark) {
            echo $subject . " = " . $mark." ";
        }
        echo " ] ";
    }

?>

<br><br>