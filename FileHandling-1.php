<?php 
$filename = "sample.txt";
// readfile directlry return content + character count
echo readfile($filename);
echo "<hr>";


// better way
$myfile = fopen($filename,"r") or die("unable to open file");
echo fread($myfile,filesize($filename));
fclose($myfile);

echo "<hr>";
?>