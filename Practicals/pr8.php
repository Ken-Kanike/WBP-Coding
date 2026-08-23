<h3>Write a program to implements multilevel inheritance.</h3>
<?php
    class Grandparent {
        function callGrandParent(){
            echo "<br>This is Grand Parent Class";
        }
    }

    class ParentClass extends Grandparent {
        function callParent(){
            echo "<br>This is Parent Class";
        }
    }

    class Child extends ParentClass {
        function callChild(){
            echo "<br>This is Child Class";
        }
    }
    $obj = new Child();
    $obj->callChild();
    $obj->callParent();
    $obj->callGrandParent();
?>

<br><br>


<h3>Write a program to implements multiple inheritance.</h3>
<?php
    echo "Multiple Inheritance is not applicable in PHP";
    // class Parent1 {
         // Properties and methods
    // }
    
    // class Parent2 {
         // Properties and methods
    // }
    
    // class Child extends Parent1, Parent2 {
         // Properties and methods
    // }
    
?>

<br><br>


<h3>Write a program to demonstrate parameterized constructor.</h3>
<?php
    class Student {
        public $name;
        public $roll;
        function __construct($name,$roll) {
            $this->name = $name;
            $this->roll = $roll;
        }

        function printData() : string {
            return "<br>Name : $this->name <br>Roll no : $this->roll";
        }
    }

    $stud = new Student("Alex", 1856);
    echo "<br>Student Details:-".$stud->printData();
?>

<br><br>


<h3>Write a program to demonstrate default constructor.</h3>
<?php
class Demo{
    public function __construct() {
       echo "<br> This is Default Constructor.";
    }
}

$obj= new Demo();

?>

<br><br>



