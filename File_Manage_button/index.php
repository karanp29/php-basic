<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Assignment-3</title>
</head>


<body>
    <div class="container" style="padding: 0 20%;">
        <div class="container">
            <div class="content">
                <div class="m-10 p-20">
                    <form method="post" class="border border-dark d-flex flex-column gap-2" style="padding:20px;">

                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="" id="my-file">
                        </div>
                        <p id="file-name">no file selected</p>
                        <textarea name="" id="text-area" cols="20" rows="10"></textarea>

                        <!-- 
                    <button type="button" class="btn btn-primary" onclick="handleFile(this)" value="x">x</button> -->
                        <div class="btn-group gap-2" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary" onclick="handleRead();"
                                value="r">read</button>
                            <button type="button" class="btn btn-primary" onclick="handleWrite();"
                                value="w">write</button>
                            <button type="button" class="btn btn-primary" 
                                value="r+">read/write</button>
                            <button type="button" class="btn btn-primary" value="w+">truncate
                                and write</button>
                            <button type="button" class="btn btn-primary"  value="a+">append /
                                create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        //Initial Reference
        let file = document.getElementById("my-file");
        let message = document.getElementById("file-name");
        let textarea = document.getElementById("text-area");

        //Call the function when there is input on the file input button
        file.addEventListener("input", () => {
            //If user selects a file
            if (file.files.length) {
                console.log(file.files)
                let fileExtension = file.files[0].name.split(".").pop();
                message.innerHTML = file.files[0].name;
                console.log(file.files[0].name)
            }
            //If user clicks on cancel
            else {
                message.innerHTML = "Please select a file";
            }
        });



        function handleRead() {
            // console.log(message.innerText)
            if (message.innerHTML == "no file selected")
                alert("Please select file first");
            return;
            fetch("read.php", {
                "method": "POST",
                "headers": {
                    "Content-Type": "application/json; charset=utf-8"
                },
                "body": JSON.stringify({ "filename": message.innerHTML })

            }).then(function (response) {
                return response.text();
            }).then(function (data) {
                console.log("data from read.php " + data)
                textarea.value = data;
            })
        }

        function handleWrite() {
            if (message.innerHTML == "no file selected")
                alert("Please select file first");
            return;
            fetch("write.php", {
                "method": "POST",
                "headers": {
                    "Content-Type": "application/json; charset=utf-8"
                },
                "body": JSON.stringify({ "filename": message.innerHTML, "textdata": textarea.value })

            }).then(function (response) {
                return response.text();
            }).then(function (data) {
                console.log("data from read.php " + data)
                textarea.value = data;
            })
        }
    </script>

</body>

</html>