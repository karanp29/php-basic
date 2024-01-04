<?php
if (isset($_POST)) {
    $data = file_get_contents("php://input");
    //to js obj to php array 
    $file_name_array = json_decode($data, true);

    $fileRead = $file_name_array["filename"];
    $appendData = $file_name_array["textdata"];

    $file = fopen($fileRead, "w") or die("file doesn't exists");
    if (file_exists($fileRead)) {
        fwrite($file, $appendData);
        echo "success";
    } else {
        echo "<script>alert('file doesn't exist')</script>";
    }
}
?>