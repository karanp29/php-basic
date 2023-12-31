<?php

try {
    $a = (int)readline("First num: ");
    $b = (int)readline("Second Num: ");
    $c = $a / $b;
    echo ($c);
} catch (customError $e) {
    echo "";
} catch (DivisionByZeroError $ex) {
    echo "number is divided by zero";

} finally {
    echo "<br>";
    echo "this block of code is executed every time irrespective of above code";
}

?>