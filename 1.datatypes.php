<?php 

# datatypes in php
# String
# Integer
# Float(double)
# Boolean
# Array - 3 types of array
# Object
# Null
# Resource - The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
#            A common example of using the resource data type is a database call/file handling.

$str = "Karan";
$int = 29;
$flo = 49.50;
$bool = True;
//index array
$arr1 = array("welcome","to","php","mastery");
echo $arr1[0];
// associate array
$arr2 = array("language"=>"PHP","type"=>"Scripting","year"=>1995);
echo $arr2["language"];
//multidemensional arrays
$arr3 = array(
    array("Apple",10),
    array("Banana",11),
    array("Mango",9)
);
echo $arr3[0][0];  // Apple

$obj = new Exception();
$null = null;
$res =  null;


// get datatype of any 
?>