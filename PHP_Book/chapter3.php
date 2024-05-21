<h3>Class and Object</h3>
<?php
    class StudentDetails{
        // data members
        var $name;
        public $rollno;
        protected $dept;
        private $result;
        //memeber function
        function setData($sname , $rno){
            $this->name = $sname;
            $this->rollno = $rno;
            $this->dept  = "CO";
            $this->result  = "PASS";
        }
        function getData(){
            echo "<br>Student Name =".$this->name;
            echo "<br>Student Roll no =".$this->rollno;
        }
    }

    // creating instance of class
    $s = new StudentDetails();
    echo $s->setData("Stud1",1856);
    echo $s->getData();
    echo "<br>var Name".$s->name;
    echo "<br>publuic Rollno ".$s->rollno;
   // echo "<br>protected Dept".$s->dept;  # cant access
    //echo "<br>private Result".$s->result;   # cant access
?>


<h3>Default constructor and Destructor</h3>
<?php
class Demo{
    public function __construct() {
       echo "<br> This is Default Constructor.";
    }
    public function __destruct()
    {
        echo "<br> The destructor is called at the end of file execution";
    }
}
$obj= new Demo();

?>



<h3>Parameterized constructor , return value with return data type from a method</h3>
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

    $stud = new Student("Junaid",1856);
    echo "<br>Student Details:-".$stud->printData();
?>

<br><br>

<h3>Data encapsulation</h3>
<?php
    echo "<br>Make properties private to hide data";
    echo "<br> use getter setter";
?>

<br><br>
<h3>simple inheritance.</h3>
<?php
    class SuperClass{
        function callSuper(){
            echo "<br>This is Super Class";
        }
    }

    class SubClass extends SuperClass {
        function callSub(){
            echo "<br>This is Sub Class";
        }
    }
    $obj = new SubClass();
    $obj->callSuper();
    $obj->callSub();
?>


<br><br>
<h3>multilevel inheritance.</h3>
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
<h3>multiple inheritance.</h3>
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

<h3>heirarchicl inheritance.</h3>
<?php
    class Animal{
        function callAnimal($animal){
            echo "<br>Im a ".$animal;
        }
    }

    class Dog extends Animal {
        function callDog(){
            echo "<br>I Bark!";
        }
    }

    class Cat extends Animal {
        function callCat(){
            echo "<br>I meow!";
        }
    }
    $c = new Cat();
    $d = new Dog();
    $c->callAnimal("Cat");
    $c->callCat();
    $d->callAnimal("Dog");
    $d->callDog();
?>

<br><br>

<h3>Method Overloading .. __call()</h3>
<?php
    class Shape{
        function __call($fname, $arguments)
        {
            if($fname =='area')
            {
                if(count($arguments)==1){
                    $result = $arguments[0] * $arguments[0];
                    return $result;
                }
                if(count($arguments)==2){
                    $result = $arguments[0] * $arguments[1];
                    return $result;
                }
            }
            // extra
            if($fname =='areatrianle')
            {
                if(count($arguments)==2){
                    $result = 0.5 * $arguments[0] * $arguments[1];
                    return $result;
                }
            }
            if($fname =='areacircle')
            {
                if(count($arguments)==2){
                    $pi = pi();
                    $result =($pi * $arguments[0]* $arguments[0]) * $arguments[1];
                    return $result;
                }
            }
        }
    }

    $ob = new Shape();
    echo "<br>Area of Square = ".$ob->area(4); // side * side
    echo "<br>Area of Rectangle = ".$ob->area(4,8);  // length * breadth
    echo "<br>Area of Circle = ".$ob->areacircle(5,10); // pie * r^2 *  h
    echo "<br>ea of Square = ".$ob->area(10,5);  // 1/2 * base * height
?>


<br><br>

<h3>Method Overriding</h3>
<?php
    class Parent2{
        function dispData(){
            echo "<br>This is method in parent class.";
        }
    }
    class Child2 extends Parent2{
        function dispData(){
            echo "<br>This is overriden method in child class.";
            Parent2::dispData();
        }
    }

    $obj1 = new Parent2();
    $obj1->dispData();
    $obj2 = new Child2();
    $obj2->dispData();
?>


<br><br>

<h3>Clonning</h3>
<?php
    class Person {
        public $fullname;
        function __construct($fname,$lname) {
            $this->fullname = $fname ." ".$lname;
        }
        // optional
        function __clone()
        {
            echo "<br><i>Clonning object..........</i>";
        }
        function dipsName(){
            return $this->fullname;
        }
    }

    $p1 = new Person("J","S");
    $p2 = $p1; // shallow copy .. both obj poiting same instance
    echo "<br>Full Name :-".$p1->dipsName();
    echo "<br>Full Name :-".$p2->dipsName();
    $p3 = clone $p1; // deep copy ...different instance created .. both obj poiting different instance
    echo "<br>Full Name :-".$p3->dipsName();
?>


<h3>serialization.</h3>
<?php
    // Define an associative array
    $studentGrades = array(
        "Alice" => 95,
        "Bob" => 85,
        "Charlie" => 78
    );
    echo "<br>Default Array : ";
    print_r($studentGrades);

    // Serialize the associative array
    $serializedGrades = serialize($studentGrades);
    echo "<br>Serialized Grades: " . $serializedGrades;

    // Unserialize the associative array
    $unserializedGrades = unserialize($serializedGrades);
    echo "<br>Unserialized Grades: ";
    print_r($unserializedGrades);
?>

<br><br>


<h3>introspection. </h3>
<?php
    class MyClass {
        public $publicVar;
        private $privateVar;

        public function __construct($publicVar, $privateVar) {
            $this->publicVar = $publicVar;
            $this->privateVar = $privateVar;
        }

        public function myMethod() {
            echo "<br>Inside myMethod\n";
        }
    }

    $obj = new MyClass("publicValue", "privateValue");

    // Check if a class exists
    echo "<br>Class MyClass exists: " . (class_exists('MyClass') ? "Yes" : "No") . "\n";

    // Check if an object is an instance of a certain class
    echo "<br>Object \$obj is an instance of MyClass: " . (is_a($obj, 'MyClass') ? "Yes" : "No") . "\n";

    // Get class methods
    $methods = get_class_methods('MyClass');
    echo "<br>Methods of MyClass: ";
    print_r($methods);

    // Check if a method exists in a class
    $methodExists = method_exists('MyClass', 'myMethod');
    echo "<br>Method myMethod exists in MyClass: " . ($methodExists ? "Yes" : "No") . "\n";

    // Get object properties
    $properties = get_object_vars($obj);
    echo "<br>Properties of \$obj: ";
    print_r($properties);

    // Check if a property exists in an object
    $propertyExists = property_exists($obj, 'publicVar');
    echo "<br>Property publicVar exists in \$obj: " . ($propertyExists ? "Yes" : "No") . "\n";

    // Get the class name of an object
    echo "<br>Class name of \$obj: " . get_class($obj) . "\n";

    // Get parent class
    echo "<br>Parent class of MyClass: " . get_parent_class('MyClass') . "\n";

    // Check if a class is a subclass of another class
    echo "<br>Is MyClass a subclass of stdClass: " . (is_subclass_of('MyClass', 'stdClass') ? "Yes" : "No") . "\n";

    // Get static properties of a class
    echo "<br>Static properties of MyClass: ";
    print_r(get_class_vars('MyClass'));

    // Get parent classes
    echo "<br>Parent classes of MyClass: ";
    print_r(class_parents('MyClass'));

    // Get implemented interfaces
    echo "<br>Implemented interfaces by MyClass: ";
    print_r(class_implements('MyClass'));

    // Check if a function exists
    echo "<br>Function echo exists: " . (function_exists('echo') ? "Yes" : "No") . "\n";
?>