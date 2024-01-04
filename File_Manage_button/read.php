<?php
    if(isset($_POST)){
        $data = file_get_contents("php://input");
        $file_name_array = json_decode ($data,true);
        // echo $file_name_array["filename"]." from read.php";
        $fileRead = $file_name_array["filename"];
        $file = fopen($fileRead, "r") or die("file doesn't exists");
        if (file_exists($fileRead)) {
            $readtext = readfile($fileRead);
            echo $readtext;
        } else {
            echo "<script>alert('file doesn't exist')</script>";
        }
    }
?>