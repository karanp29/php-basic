<?php

// cannot created object of abstract class 
// should have atleast abstract method
// can also have normal(non abstract) method
// abstract method cannot be private
// should/must have atleast one abstract method
// can have private/public/protected data members
// can have  private/public/protected member function
// can have constructor and destructor
// abstract methods must have only public access specifier
// abstract class can't be instantiated - i.e object can not be created 
// abstract keyword is used to declare an class/method abstract

// child class of abstract class
// every abstract method must be implement by child class
abstract class Sample{
    public $fname;
    protected $lname;

    function __construct($fname,$lname){
        $this->fanme = $fname;
        $this->lanme = $lname;
        echo "this is from :",__CLASS__, " function ",__FUNCTION__;
    }
    abstract function showDetails1();
    abstract function showDetails2($fname,$lname);
    abstract function showDetails3() : string;

}

// abstract class Test extends Sample{
//     abstract function showDetails();
// }

// class Test2 extends Test{

// }
class Test extends Sample{
    function showDetails1(){
        echo "this is from :",__CLASS__, " function ",__FUNCTION__;
    }
    function showDetails2($fname,$lname){
        echo "this is from :",__CLASS__, " function ",__FUNCTION__;
    }
    function showDetails3(){
        return "this is from :".__CLASS__. " function ".__FUNCTION__; 
    }
}

$s = new Test("K","P");
$t->showDetails2();
?>