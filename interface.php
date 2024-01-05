<?php 

// cannot define properties
// work like abstract class 
// full abstraction
//cannot create object of interface
// can only have abstract method - only declare 
// cannot use access modifier

interface A {
    function show();
}
interface B {
    function show();
}
class C implements A,B{
    function show(){
        echo "this is from class : ",__CLASS__ , " function :", __FUNCTION__;
    }
}

$c = new C();
$c->show();
?>