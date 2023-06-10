<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
    if (isset($_GET['success'])) {
        echo "<div class='message' style='z-index: 100; background: green;'>
                <span>Account successfully created</span>
                </div>";
    } ?>
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
                <a href="">
                    <span>Back to home</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="text-center my-3">
            <span style="font-size: 23px;">Login with us <br> and <br><span style="color: rgba(255, 144, 14, 1);"> exciting with our services </span></span>
        </div>
    <div class="container" style="min-height: calc(100vh - 310px);display: flex;align-items: flex-start;justify-content: center;">
        
        <form action="proceses/login_proces.php" method="post" class="login_form">
            <input class="input_item" name="email" type="email" placeholder="Email">
            <input class="input_item" name="password" type="password" placeholder="Password">
            <div style="width: 100%;display: flex;align-items: center;justify-content: space-between;">
                <a href="signUp.php">I don’t have account !!</a>
                <input type="submit" value="Login" class="GO" style="padding: 5px 20px;">
            </div>
        </form>
    </div>
    <?php include("footer.php") ?>
</body>

</html>