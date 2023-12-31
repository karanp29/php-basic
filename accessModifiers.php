<?php 

class Sample{

    //property or method can be accessed from everywhere. This is default
    public $s1;
    //property or method can only be accessed within the class
    private $s2;
    // property or method can be accessed within the classs and by classes derived from that class
    protected $s3;

    function public_test(){  // by default public

    }

    private function private_test(){

    }

    protected function protected_test(){
        
    }
}

?>