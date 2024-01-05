<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php
    //check action paramter is there or not
    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"] == "submit") {
            // tmp name is temporary name that is done by server stored in buffer
            echo "<br> Name: ", $_FILES["kfile"]["name"];
            echo "<br> Tmp name: ", $_FILES["kfile"]["tmp_name"];
            echo "<br> Type: ", $_FILES["kfile"]["type"];
            echo "<br> Size: ", $_FILES["kfile"]["size"];
            echo "<br> Error: ", $_FILES["kfile"]["error"];

            //store tmp file to uploads folder
            $filename =  $_FILES["kfile"]["name"];
            $tempFile = $_FILES["kfile"]["tmp_name"];
            $filetype = $_FILES["kfile"]["type"];
            $filesize = $_FILES["kfile"]["size"]; 

            // where want to upload file
            $folder = "uploads/".$filename;

            if ($filetype == "application/pdf" || $filetype == "image/png") {
                if (move_uploaded_file($tempFile, $folder)) {
                    echo "file moved  successfully";
                    //check file in uploads folder
                }
            }
        }
    }

    ?>

    <div class="container">
        <div class="form">
            <form action="filehandling-3.php" method="post" enctype="multipart/form-data">
                <input type="file" name="kfile" id="kfile">
                <input type="submit" value="submit" name="action">
            </form>
        </div>
    </div>
</body>

</html>