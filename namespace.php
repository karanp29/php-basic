<?php 

namespace php_mastery;

class Cars{
    function showInfo(){
        echo "this is from class ",__CLASS__," function ", __FUNCTION__ , " namespace ",__NAMESPACE__;
    }
}

$c = new Cars;
$c->showInfo();
?>