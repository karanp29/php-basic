<?php
# Static methods/properties  can be called directly - without creating an instance of the class first.
# access static method/properties using double colon (::)
# ClassName::staticMethodName();
# ClassName::staticPropertyName();
#
#
#

class Sample{
    static $username = "hello, world!!";
    static function display(){
        echo "this is from function ",__FUNCTION__ , " and class ",__CLASS__;
    }
    function __construct(){
        // static method accessed from a method in the same class using self keyword and (::)
        self::display();
    }
}

//calling static methods
Sample::display();
echo "<br>";
//calling static property
print(Sample::$username);

?>