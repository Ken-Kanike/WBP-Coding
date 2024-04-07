<h3>Develop a PHP code for serialization.</h3>
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


<h3>Develop a PHP code for introspection. </h3>
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

    // Get an array of declared classes
    // echo "<br>Declared classes: ";
    // print_r(get_declared_classes());

    // Get an array of declared interfaces
    // echo "<br>Declared interfaces: ";
    // print_r(get_declared_interfaces());

    // Get an array of all defined functions
    // echo "<br>Defined functions: ";
    // print_r(get_defined_functions());

    // Get an array of all defined variables
    // echo "<br>Defined variables: ";
    // print_r(get_defined_vars());
?>
