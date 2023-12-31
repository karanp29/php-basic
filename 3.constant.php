<?php

// the value variable cannot be changed in the script
// how to create PHP constants
// constant name should start with a letter or underscore ($❌)
// constants are implictly global and can be used across the entire script

//  const keyword
// const is case sensitive
// cannot be created inside block scope {} , like function / if else block
const myVar = "Karan";
print myVar;

echo("<hr>");

// define() function
//  case insensitive option
// can be created inside another block scope {}

define ("myConst","PHP Mastery"); 
echo myConst;


echo("<hr>");
//const array
define ("arr", ["PHP","HTML","CSS"]);
echo arr[0];
?>