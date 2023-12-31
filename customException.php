<?php

class customError extends Exception
{
    function error_message()
    {
        echo "this is a custom error";
    }
}

try {
    echo
        throw new customError();
} catch (customError $e) {
    //custom define method in customError Class
    echo $e->error_message();

    //inherit method from Exception class
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
    echo $e->getLine();
    echo "<br>";
    echo $e->getTraceAsString();
    echo "<br>";
    echo $e->getCode();
    echo "<br> convert to array";
    print_r($e->getTrace());



}

?>