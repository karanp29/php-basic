<?php 

// parent class constructor and destructor is called from child class
class Human{
    public $name;
    function __construct($name){
        $this->name = $name;
        echo "this is constuctor from class <b>", __CLASS__ , " </b> and method  <b>", __METHOD__, " </b> and function <b>", __FUNCTION__ ,"</b>";
        echo "<hr>";
    }

    function __destruct(){
        echo "this is destructor from class <b>", __CLASS__ , " </b> and method  <b>", __METHOD__ , " </b> and function <b>", __FUNCTION__ ,"</b>";
        echo "<hr>";
    }

    function show(){
        echo $this->name , "this is from class <b>", __CLASS__ , " </b> and method  <b>", __METHOD__, " </b> and function <b>", __FUNCTION__ ,"</b>";
        echo "<hr>";
    }
}

class Person extends Human{
    public $name;
    function __construct($name){
        $this->name = $name;
        parent::__construct($name);
        echo "this is constuctor from class <b>", __CLASS__ , " </b> and method  <b>", __METHOD__, " </b> and function <b>", __FUNCTION__ ,"</b>";
        echo "<hr>";
    }

    function __destruct(){
        parent::__destruct();
        echo "this is destructor from class <b>", __CLASS__ , " </b> and method  <b>", __METHOD__, " </b> and function <b>", __FUNCTION__ ,"</b>";
        echo "<hr>";
    }

    function show(){
        echo $this->name , "this is from class <b>", __CLASS__ , " </b> and method  <b>", __METHOD__, " </b> and function <b>", __FUNCTION__ ,"</b>";
        echo "<hr>";
    }
}
// 1
// $h = new Human("Karan");
// $h->show();

//2
// $p = new Person("KP Jr");
// $p -> show();
?>