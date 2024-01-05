<?php 

// readfile - read whole file
// fgets -  used to read a single line from a file.
// feof()  checks if the "end-of-file" (EOF) has been reached.
// fgetc()  used to read a single character from a file.
// file_get_contents() reads a file into a string.

$filename = "sample.txt";
// readfile directlry return content + character count

echo "<hr><h3>readfile()</h3><br>";
echo readfile($filename);
echo "<hr>";


// better ways

//fread
echo "<hr><h3>fread</h3><br>";
$myfile = fopen($filename,"r") or die("unable to open file");
echo fread($myfile,filesize($filename));
echo "<hr>";
fclose($myfile);

//fgets
echo "<hr><h3>fgets</h3><br>";
$myfile = fopen($filename,"r") or die("unable to open file");
echo fgets($myfile);
echo "<hr>";
fclose($myfile);

//fgetc
$myfile = fopen($filename,"r") or die("unable to open file");
echo "<hr><h3>fgetc</h3><br>";
echo fgetc($myfile);
echo "<hr>";
fclose($myfile);








?>