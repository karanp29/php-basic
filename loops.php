<?php 
// while - loops through a block of code as long as the specified condition is true

$start = 5;
while ($start > 0){
    echo $start , "<br>";
    $start--;
}
// do while - oops through a block of code once, and then repeats the loop as long as the specified condition is true

// for - loops through a block of code a specified number of times
$end = 5;
for ($i=0; $i < $end; $i++) { 
    echo $i , "<br>";
}

// foreach - loops through a block of code for each element in an array
$cities = array("Mumbai", "New Delhi", "Banglore");

foreach ($cities as $key => $value) {
    echo $key , $value , "<br>";
}
// break - used to jump out of different kind of loops

// continue - jump out of the current iteration of a loop, and continue with the next.


?>