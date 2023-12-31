<?php
//inheritance - when one class is derived from another

//the child class inherit all public and protected properties and method from the parent class.
// Its own properties and method

// inheritance is done using extends keyword
// php only supports single level inheritance
class Vehicle{
    public $model;
    public $year;
    function __construct($model,$year){
        $this->model = $model;
        $this->year = $year;

    }
}

class Car extends Vehicle{
    function showDetails(){
        echo "this is car with model ", $this->model , " and year ", $this->year;
    }
}

$supra = new Car("Toyato",2015);
$supra->showDetails();
?>