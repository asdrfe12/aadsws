<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add file</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="nav_container">
        <div style="width: 100px;">
            <img src="images/Logo2.png" style="width: 100%;" alt="">
        </div>
        <ul>
            <!-- <li>
                <a href="">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>Let’s begin</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>About</span>
                </a>
            </li> -->
            <li>
                <a href="index.php">
                    <span>Back to home</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="container" style="min-height: calc(100vh - 170px);">
        <div class="text-center my-5">
            <span class="text">Add you data file to begin</span>
        </div>
        <form class="form" method="post" action="proceses/uploadfile.php" enctype="multipart/form-data">
            <div class="top_form my-3">
                <div>
                    <div class="drag-area">
                        <span>Drop or click to browse...</span>
                    </div>
                </div>
                <div>
                    <label class="input_file" for="input_filee">Browse</label>
                    <input name="file" id="input_filee" type="file" hidden />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="text2">Date type for analyze</span>
                </div>
                <div class="col-md-6">
                    <div class="Options_container ms-auto">
                        <span id="option1" style="background: rgba(255, 144, 14, 0.6);color:#fff;">General</span>
                        <span id="option2">Weekly</span>
                        <span id="option3">Monthly</span>
                    </div>
                </div>
            </div>


            <div class="row mt-5" id="month" style="display: none;">
                <div class="top-section">
                    <span>Choose month:</span>
                </div>
                <div class="bottom-section">
                    <div class="section_content">
                        <div class="radio_item">
                            <input type="radio" id="Jan" name="month">
                            <label for="Jan">Jan</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" id="Feb" name="month">
                            <label for="Feb">Feb</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="month" id="Mar">
                            <label for="Mar">Mar</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="month" id="Apr">
                            <label for="Apr">Apr</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="month" id="May">
                            <label for="May">May</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="month" id="Jun">
                            <label for="Jun">Jun</label>
                        </div>
                    </div>
                    <div class="section_content" style="justify-content: space-around;">
                        <div class="radio_item">
                            <input type="radio" name="month" id="July">
                            <label for="July">July</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="month" id="Ogu">
                            <label for="Ogu">Ogu</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="month" id="Oct">
                            <label for="Oct">Oct</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="month" id="Nov">
                            <label for="Nov">Nov</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="month" id="Dec">
                            <label for="Dec">Dec</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5" id="week" style="display: none;">
                <div class="top-section">
                    <span>Choose week:</span>
                </div>
                <div class="bottom-section">
                    <div class="section_content">
                        <div class="radio_item">
                            <input type="radio" id="Week_1" name="week">
                            <label for="Week_1">Week 1</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" id="Week_2" name="week">
                            <label for="Week_2">Week 2</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="week" id="Week_3">
                            <label for="Week_3">Week 3</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="week" id="Week_4">
                            <label for="Week_4">Week 4</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5" style="justify-content: flex-end;">
                <input type="submit" value="GO" class="GO">
            </div>
        </form>
    </div>
    <?php include("footer.php") ?>
    <script>
        const dropArea = document.querySelector('.drag-area');
        const input_file = document.getElementById('input_filee');
        let file;
        dropArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            console.log('File is inside the drag area');
        });
        dropArea.addEventListener('drop', (event) => {
            event.preventDefault();
            console.log('File is dropped in drag area');

            file = event.dataTransfer.files[0]; // grab single file even of user selects multiple files
            console.log(file);
            input_file.value = file;
            console.log(input_file);
            // displayFile();
        });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>