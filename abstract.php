<?php

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