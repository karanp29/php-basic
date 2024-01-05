<?php

function getList($name1, $name2, $name3, $name4): iterable
{
    return [$name1, $name2, $name3, $name4];
}
$mylist = getList(11, 22, 23, 24);

foreach ($mylist as $data) {
    echo "<br> ", $data;
}


echo "<hr>";
function checkList(iterable $people)
{
    foreach ($people as $random)
        echo "<br> Hi ,", $random;
}
$a = ["Ram", "Sam"];
checkList($a);
?>