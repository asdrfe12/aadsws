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
    <div class="nav_container">
        <div style="width: 100px;">
            <img src="images/Logo2.png" style="width: 100%;" alt="">
        </div>
    </div>
    <div class="text-center my-3">
            <span style="font-size: 23px;">Reset Password</span>
        </div>
    <div class="container" style="min-height: calc(100vh - 200px);display: flex;align-items: center;justify-content: center;">
        
        <form action="" class="login_form">
            <input class="input_item" type="password" placeholder="New password">
            <input class="input_item" type="text" placeholder="Confirm password">
            <div style="width: 100%;display: flex;align-items: center;justify-content: center;">
                <input type="submit" value="Reset password" class="GO" style="padding: 5px 20px;">
            </div>
        </form>
    </div>
    <?php include("footer.php") ?>
</body>

</html>