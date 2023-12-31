<?php 
// An array is a datatype that can hold many values under a single variable name, 
// can access values by using index or name

// 3 Types of array 

// 1. Indexed array of cities ---------------------------------------------------------------------------
$cities = array("Mumbai", "New Delhi", "Banglore");
$city = ["Mumbai", "New Delhi", "Banglore"];
// can defined index also
$cars = [
    0 => "Volvo",
    1 => "BMW",
    2 =>"Toyota"
  ];
array_push($cities,"Chennai");

foreach($cities as $x){
    echo "$x <br>";
}

$cities[10] = "Jaipur";
array_push($cities,"Goa");  // will be added to index 11
var_dump($cities);

echo ("<hr>");

// 2. Associative array ---------------------------------------------------------------------------
$person = array("name" => "Karan", "age" => 30, "city" => "Mumbai");
//change value
$person["name"] = "KP";

foreach ($person as $key => $value) {
    echo "$value <br>";
}
var_dump($person);

echo "<hr>";
// 3. Multidimensional ---------------------------------------------------------------------------
$matrix = array(
    array("A", "B", "C"),
    array("AA", "BB", "CC"),
    array("AAA")
);

for ($row=0; $row < count($matrix); $row++) { 
    echo "Row $row ";
    echo "<ul>";
    for ($col=0; $col < count($matrix[$row]); $col++) { 
            echo "<li> ",$matrix[$row][$col];
    }
    echo "</ul>";
    
}
// built in array functions
echo "<br> count of array :",count($cities);
?>