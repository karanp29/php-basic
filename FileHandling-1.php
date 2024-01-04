<?php 

// readfile - read whole file
// fgets -  used to read a single line from a file.
// feof()  checks if the "end-of-file" (EOF) has been reached.
// fgetc()  used to read a single character from a file.
// file_get_contents() reads a file into a string.

$filename = "sample.txt";
// readfile directlry return content + character count
echo readfile($filename);
echo "<hr>";


// better ways

$myfile = fopen($filename,"r") or die("unable to open file");
echo fread($myfile,filesize($filename));
fclose($myfile);
echo "<hr>";



?>