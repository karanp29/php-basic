<?php
// better way than readfile()

// r	Open a file for read only. File pointer starts at the beginning of the file
// w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// x	Creates a new file for write only. Returns FALSE and an error if file already exists
// r+	Open a file for read/write. File pointer starts at the beginning of the file
// w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
// file_put_contents

$filename = "sample.txt";
function myfileread()
{
    global $filename;
    echo "<h3>Reading file (r)</h3><br>";
    $myfile = fopen($filename, "r") or die("unable to open file");
    echo fread($myfile, filesize($filename));
    fclose($myfile);
    echo "<hr>";
}
myfileread();

echo "<h3>Writing file (w)</h3><br>";
$myfile = fopen($filename, "w") or die("unable to open file");
echo fwrite($myfile, "this data is added to file overriding pervious data");
fclose($myfile);
echo "<hr>";

myfileread();

echo "<h3>Override Writing file (a)</h3><br>";
$myfile = fopen($filename, "a") or die("unable to open file");
echo fwrite($myfile, "this data is appended to previously added data....");
fclose($myfile);
echo "<hr>";

myfileread();

echo "<h3> Writing file (a)</h3><br>";
$myfile = fopen($filename, "a") or die("unable to open file");
echo fwrite($myfile, "this data is appended to previously added data....");
fclose($myfile);
echo "<hr>";

?>