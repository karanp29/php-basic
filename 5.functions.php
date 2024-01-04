<?php 
 declare(strict_types=1); // strict requirement


//function is a block of statments that can be used in repeated programming
// function on execute when called using function name

// user defined function 
// start with keyword function followed by fun_name(){ // statemtnts }
// can start with underscore or letter
// case insensitive

//calling a function function_name followed by parentheses() and semicolon (;);

$name = "Karan";
//normal function
function displayProfile(){
    global $name;
    echo "this is from function, ",__FUNCTION__;
    echo "<br> Name :" . $name;
}

//parameter function
function display($x){
    echo "this is from function, ",__FUNCTION__;
    echo "<br> Name :" . $x;
}

displayProfile();
print("<br>");
display($name);

// default argument 

function age($age = 18){
    echo "Person age is : ",$age;
}
echo age(30); // print 30
echo age(); // print 18

echo "<hr>";
// returning values

function userDetails ($fname , $lname){
    $fullname = $fname . $lname;
    return $fullname;
}

echo userDetails("Karan","P"); // Karan P

echo "<hr>";
// passed by reference - & is used to pass by reference
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


// ... variadic argument 
// it must be last argument
// accepts unkown number of arguments
// ... array of arrguments is passed then loop through it
function printDetails(...$details){
    echo ("<hr>");
    foreach ($details as $value) {
        echo $value," ";
    }
}

printDetails("Karan");
printDetails("Karan","P");  
printDetails("Karan","P","Learn");
printDetails("Karan","P","Learn","PHP");
printDetails("Karan","P","Learn","PHP","Basic");


// strict 
// function addNumbers(int $a, int $b) {
//     return $a + $b;
//   }
//   echo addNumbers(5, "5 days");
//   // since strict is enabled and "5 days" is not an integer, an error will be thrown

// addNumbers(10,5);

// returning with strict
//here float is return :float

echo"<hr>";

function addFloat(float $a, float $b) : float {
    return $a + $b;
  }
echo addFloat(1.2, 5.2);

?>