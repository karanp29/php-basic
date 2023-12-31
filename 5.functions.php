<?php 


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
?>