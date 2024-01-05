<?php 

class Student {
    public $name;
    function __construct($name){
        $this->name = $name;
    } 
}
class Teacher{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}

function showNames(Student $a, Teacher $b){
    echo "Student name : $a->name";
    echo "Teacher name : $b->name";

}
$s = new Student("Karan");
$t = new Teacher("KP");

//object are passed as parameter to function
showNames($s, $t);

// defining datatype 
function addNumbers(int $a, int $b){
    return $a + $b;
}

echo addNumbers(10,5);



?>