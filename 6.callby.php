<?php 

//call by value - 
echo "-------------CALL BY VALUE----------------------------------<br>";
$arr = [1,2,3,4,5];
$num = 10;

function callByReference($array,$number){
    $array[0] = 10;
    $number += 10;
}

echo "before changes";
print_r ($arr) ;
echo "old value of variable ",$num;
echo "<hr>";
//calling pass by reference
callByReference($arr,$num);
echo "after changes";
print_r ($arr) ;
echo "new value of variable ",$num;

echo "<br> values of arr and num does not change";
echo "<hr>";

echo "<>-------------CALL BY REFERENCE----------------------------------<br>";
// passed by reference - & is used to pass by reference
// passed using memory location
$arr2 = [1,2,3,4,5];
$num2 = 10;

// also try to run with removing & from before parameter
function giveReference(&$array,&$number){
    $array[0] = 10;
    $number += 10;
}

echo "before changes";
print_r ($arr2) ;
echo "old value of variable ",$num2;
echo "<hr>";
//calling pass by reference
giveReference($arr2,$num2);
echo "after changes";
print_r ($arr2) ;
echo "new value of variable ",$num2;
echo "<hr>";

?>