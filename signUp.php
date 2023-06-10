<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        echo "<div class='message' style='z-index: 100;'>
                <span>The account already exists</span>
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
        <span style="font-size: 23px;">Create your own account <span style="color: rgba(255, 144, 14, 1);">now</span></span>
    </div>
    <div class="container" style="min-height: calc(100vh - 240px);display: flex;align-items: flex-start;justify-content: center;">

        <form action="proceses/signUp_proces.php" method="post" class="login_form">
            <input name="name" class="input_item" type="text" placeholder="Name">
            <input name="email" class="input_item" type="email" placeholder="Email">
            <input name="password" class="input_item" type="password" placeholder="Password">
            <div style="width: 100%;display: flex;align-items: center;justify-content: center;">
                <input type="submit" value="Create account" class="GO" style="padding: 5px 20px;">
            </div>
        </form>
    </div>
    <?php include("footer.php") ?>
</body>

</html>