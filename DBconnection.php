<?php

//connect to server
$conn = mysqli_connect("localhost:3306","root","","") or die("connection die");

//connect to specific database in server
$conn = mysqli_connect("localhost:3306","root","","practice") or die("connection die");

if($conn->query("select * from table1")){
    echo "selection successfull";
}
else{
    echo "selection failed";
}



?>