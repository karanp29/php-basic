<?php

class customError extends Exception{
    function error_message(){
        echo "this is a custom error";
    }
}

try {
    throw new customError;
} catch (customError $e) {
    echo $e->getMessage();
}

?>