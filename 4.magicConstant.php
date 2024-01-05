<?php
/* 9 magic constant in php
*   magic constant are case insensitive
*  __CLASS__      - return class name  =>  Person 
*  __FUNCTION__   - return function name => showDetails  / __construct / __destruct
*  __METHOD__     - return class_name::function_name =>  Person::showDetails  / Person::__construct
*  __LINE__       - return line number => 
*  __DIR__
*  __NAMESPACE__
*  __TRAIT__
*  __CLASSNAME::CLASS__
*  __FILE__
*/

namespace php_mastery;
class Person {
    public $fname;
    public $lname;
    function __construct($fname, $lname){
        echo "this is constuctor from class <b>", __CLASS__ , " </b> and method  <b>", __METHOD__, " </b> and function <b>", __FUNCTION__ ,"</b>";
        echo "<br> this is called from line number ". __LINE__;

    }

    function __destruct(){
        echo "<hr>";
        echo "this is destructor from class <b>", __CLASS__ , " </b> and method  <b>", __METHOD__, " </b> and function <b>", __FUNCTION__ ,"</b>";
        echo "<br> this is called from line number ". __LINE__;

    }

    function showDetails(){
        echo "<hr>";
        echo "this is showDetails() from class <b>", __CLASS__ , " </b> and method  <b>", __METHOD__, " </b> and function <b>", __FUNCTION__ ,"</b>";
        echo "<br> this is called from line number ". __LINE__;
    }

    function fileDetails(){
        echo "<hr>";
        echo "directory to file is ",__DIR__; // C://Users/xampp/htdocs/folder_name
        echo "<br>";
        echo "path + filename : ",__FILE__;

    }

    function getNamespace(){
        echo "<hr>";
        echo "namespace ",__NAMESPACE__; // no namespace return blank ""
    }

    function namespace_class(){
        echo "<hr>";
        echo "return namespace\class_name = " ,Person::class;
    }
}


$p = new Person("Karan","PHP");
$p->showDetails();
$p->fileDetails();
$p->getNamespace();
$p->namespace_class();

// magic function

// The following method names are considered magical:
//  __construct(),
//   __destruct(),
//    __call(), __callStatic(), __get(), __set(), __isset(),
//     __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone(), 
// and __debugInfo().
?>