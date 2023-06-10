<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main interdace</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include("nav.php") ?>
    <div class="main_interface_containt">
        <span><span style="color: #000;">DD</span><span style="color: rgba(255, 144, 14, 1);">AS</span> for</span>
        <span style="padding-left: 40px;">Analysts</span>
        <span style="max-width: 500px;padding-top: 20px;">Smooth the path from raw data to powerful insights.</span>
    </div>
    <div class="begin_container">
        <span>Try the most powerful platform for all data</span>
        <a href="Result.php">Let’s begin</a>
    </div>
    <div id="about" class="About_us_container">
        <span>About <span style="color: rgba(255, 144, 14, 1);">Us</span></span>
        <p>DDAS it is digital data analysis site designed specifically for small electronic stores for helping store owners minimize financial losses by providing them with the tools they need to analyze their sales data without having to rely on expensive third-party companies or freelancers.</p>
    </div>

    <?php if (isset($_GET['error'])) {
        if ($_GET['error'] == 1) {
    ?>
            <div class="Reset_password_page" id="main_page" style="display: flex;">
                <div class="Reset_password_container" id="login">
                    <div style="width: 40px;">
                        <img src="images/j.png" style="width: 100%;" alt="">
                    </div>
                    <div class="text-center">
                        <span class="text6">Login first</span>
                    </div>
                    <div class="btn_container">
                        <a href="login.php" id="ok" class="ok" style="background: rgba(98, 163, 183, 0.87);">Login </a>
                        <span id="Cancel_login" class="Cancel" style="background: #EC1435;">Cancel</span>
                    </div>
                </div>
            </div>
    <?php }
    } ?>

    <?php include("footer.php") ?>
    <script>
        document.getElementById("Cancel_login").addEventListener("click", function() {
            document.getElementById("main_page").style.cssText = "display: none;";
        });
    </script>
</body>

</html>