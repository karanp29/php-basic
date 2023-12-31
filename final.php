<?php

final class Sample{
    function showData(){
        echo "this is from class ", __CLASS__;
    }

}
class Sam extends Sample{

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