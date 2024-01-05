<?php
trait TA
{
    public function show()
    {
        echo "<br> method : ", __METHOD__, "class : ", __CLASS__;
    }
    public function info()
    {
        echo "<br> method : ", __METHOD__, "class : ", __CLASS__;
    }
}
trait TB
{
    public function show()
    {
        echo "<br> method : ", __METHOD__, "class : ", __CLASS__;
    }
    public function info()
    {
        echo "<br> method : ", __METHOD__, "class : ", __CLASS__;
    }
}

// class C
// {
//     use TA;
// }

class C
{
    use TA, TB {
        TA::show insteadof TB;
        TB::info insteadof TA;
    }
}
$c = new C;
$c->show();
$c->info();
?>