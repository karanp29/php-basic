<?php

// final class cannot be inherit
// final method cannot be override by child class
final class Sample1{
    function showData(){
        echo "this is from class ", __CLASS__;
    }

}
// uncomment and check
class Sam extends Sample1{

}

//throw error at run time cannot inherit final class
$s = new Sam();

class Test{
    final function show(){
        echo "this is from class",__CLASS__ , " method " , __METHOD__;
    }
}

class T extends Test{
    function show(){
        echo "this is from class",__CLASS__ , " method " , __METHOD__;
    }
}

$t = new T();
$t->show();

?>