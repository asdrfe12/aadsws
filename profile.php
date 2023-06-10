<?php

session_start();
include('proceses/dbconfig.php');
$id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE (id='$id')";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

$query = "SELECT * FROM files WHERE userId='$id'";

$result = mysqli_query($conn, $query);
//$row = mysqli_fetch_array($result);
$num_row = mysqli_num_rows($result);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include("nav.php") ?>
    <div class="text-center my-3">
        <form action="">
            <label for="image">
                <div class="profile_img_con">
                    <img src="images/Profile Image.png" style="width: 100%;" alt="">
                </div>
            </label>
            <input type="file" id="image" hidden>
        </form>
    </div>
    <div class="container" style="min-height: calc(100vh - 240px);display: flex;flex-direction: column; align-items: center;justify-content: flex-start;">
        <form action="" class="profile_inf">
            <span class="profile_inf_title">Name</span>
            <div class="profile_form_row">
                <span id="name" style="font-weight: 500;"><?php echo $row['name']; ?></span>
                <input id="name_input_field" placeholder="Enter New name" type="text" class="input" style="display: none;">
                <!-- <div style="width: 40px;cursor: pointer;">
                    <img src="images/Group.png" style="width: 100%;" alt="" id="edit_name_btn">
                </div> -->
                <label id="name_save_btn" for="edit-name" style="width: 40px;cursor: pointer;display: none;">
                    <img src="images/Group.png" style="width: 100%;" alt="">
                </label>
                <input id="edit-name" type="submit" style="display: none;">
            </div>
        </form>
        <form action="" class="profile_inf">
            <span class="profile_inf_title">Email</span>
            <div class="profile_form_row">
                <span id="email" style="font-weight: 500;"><?php echo $row['email']; ?></span>
                <input id="email_input_field" placeholder="Enter New Email" type="email" class="input" style="display: none;">
                <!-- <div style="width: 40px;cursor: pointer;">
                    <img src="images/Group.png" style="width: 100%;" alt="" id="edit_email_btn">
                </div> -->
                <label id="email_save_btn" for="edit-email" style="width: 40px;cursor: pointer;display: none;">
                    <img src="images/Group.png" style="width: 100%;" alt="">
                </label>
                <input id="edit-email" type="submit" style="display: none;">
            </div>
        </form>
        
        <div class="profile_inf" style="display: flex;flex-direction: row;align-items: center;justify-content: flex-end;border: none;padding: 0px;">
            <a href="login.php"><span class="GO" id="logout_btn">
                    <div style="width: 35px;">
                        <img src="images/mdi-light_login.png" style="width: 100%;" alt="">
                    </div>
                    <span>Logout</span>
                </span>
            </a>
        </div>
        <div class="row my-5" style="width: 100%;">
            <div class="col-md-12">
                <div class="profile_bottom">
                    <span class="text4">Recent analyses files</span>
                    <div class="text5" style="width: fit-content;display: flex;align-items: center;gap: 5px;font-weight: 500;">
                        <span>From Oldest to newest</span>
                        <div style="width: 25px;">
                            <img src="images/bx_sort.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <?php $i = 0;
                    while ($row = $result->fetch_assoc()) { ?>
                        <div class="profile_bottom_item">
                            <span style="font-size: 18px;font-weight: 500;"><?php echo $row['file']; ?></span>
                            <div style="display: flex;align-items: center;gap: 10px;">
                                <a href="Result.php?file=<?php echo $i; ?>" class="GO" style="padding: 5px 20px;">Display</a>
                                <div style="width: 35px;">
                                    <a href="proceses/del.php?id=<?php echo $row['id']; ?>"><img class="delet" src="images/material-symbols_delete.png" style="width: 100%;cursor: pointer;" alt=""></a>
                                </div>
                            </div>
                        </div>
                    <?php $i = $i + 1;
                    } ?>
                    <div class="Options_container mt-4" style="margin: auto;">
                        <span style="background: rgba(255, 144, 14, 0.6);color:#fff;"><a style="text-decoration: none; color:white" href="Add_file.php">Add new file</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Reset_password_page" id="Reset_password_page">
        <div class="Reset_password_container" id="Reset_password">
            <div class="text-center">
                <span class="text6">Check your Gmail inbox to get <br> verification code</span>
            </div>
            <div class="btn_container">
                <span id="ok" class="ok">OK </span>
                <span id="Cancel" class="Cancel">Cancel</span>
            </div>
        </div>
        <div class="Reset_password_container" id="verification" style="display: none;">
            <div class="text-center">
                <span class="text6">Enter verification code</span>
            </div>
            <form class="input_group" action="">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
            </form>
            <div class="btn_container">
                <span class="ok">OK </span>
                <span id="Cancel_verification" class="Cancel">Cancel</span>
            </div>
        </div>
        <div class="Reset_password_container" id="logout" style="display: none;">
            <div style="width: 40px;">
                <img src="images/j.png" style="width: 100%;" alt="">
            </div>
            <div class="text-center">
                <span class="text6">Are you sure to logout?</span>
            </div>
            <div class="btn_container">
                <a href="proceses/login_proces.php" id="ok" class="ok" style="background: rgba(236, 20, 53, 0.87);">Logout </a>
                <span id="Cancel_logout" class="Cancel">Cancel</span>
            </div>
        </div>
        <div class="Reset_password_container" id="delet_container" style="display: none;">
            <div style="width: 40px;">
                <img src="images/r.png" style="width: 100%;" alt="">
            </div>
            <div class="text-center">
                <span class="text6">Are sure to delete this file?</span>
            </div>
            <div class="btn_container">
                <a href="" id="ok" class="ok" style="background: rgba(236, 20, 53, 0.87);">Delete</a>
                <span id="Cancel_Delete" class="Cancel">Cancel</span>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
    <script>
        document.getElementById("edit_name_btn").addEventListener("click", function() {
            document.getElementById("name").style.cssText = "display: none;";
            document.getElementById("name_save_btn").style.cssText = "display: flex;";
            document.getElementById("name_input_field").style.cssText = "display: flex;";
            document.getElementById("edit_name_btn").style.cssText = "display: none;";
        });
        document.getElementById("edit_email_btn").addEventListener("click", function() {
            document.getElementById("email").style.cssText = "display: none;";
            document.getElementById("email_save_btn").style.cssText = "display: flex;";
            document.getElementById("email_input_field").style.cssText = "display: flex;";
            document.getElementById("edit_email_btn").style.cssText = "display: none;";
        });
        document.getElementById("Reset_pass").addEventListener("click", function() {
            document.getElementById("Reset_password_page").style.display = "flex";
            document.getElementById("Reset_password").style.display = "flex";
            document.getElementById("logout").style.display = "none";
            document.getElementById("verification").style.display = "none";
            document.getElementById("delet_container").style.display = "none";
        });
        document.getElementById("Cancel").addEventListener("click", function() {
            document.getElementById("Reset_password_page").style.display = "none";
        });
        document.getElementById("Cancel_verification").addEventListener("click", function() {
            document.getElementById("Reset_password_page").style.display = "none";
        });
        document.getElementById("Cancel_logout").addEventListener("click", function() {
            document.getElementById("Reset_password_page").style.display = "none";
        });
        document.getElementById("Cancel_Delete").addEventListener("click", function() {
            document.getElementById("Reset_password_page").style.display = "none";
        });
        document.getElementById("ok").addEventListener("click", function() {
            document.getElementById("verification").style.display = "flex";
            document.getElementById("Reset_password").style.display = "none";
        });
        document.getElementById("logout_btn").addEventListener("click", function() {
            document.getElementById("verification").style.display = "none";
            document.getElementById("Reset_password").style.display = "none";
            document.getElementById("delet_container").style.display = "none";
            document.getElementById("logout").style.display = "flex";
            document.getElementById("Reset_password_page").style.display = "flex";
        });
        let delete_btn = document.querySelectorAll(".delet");
        console.log(delete_btn);
        for (let i = 0; i < delete_btn.length; i++) {
            delete_btn[i].addEventListener("click", function() {
                document.getElementById("verification").style.display = "none";
                document.getElementById("Reset_password").style.display = "none";
                document.getElementById("logout").style.display = "none";
                document.getElementById("Reset_password_page").style.display = "flex";
                document.getElementById("delet_container").style.display = "flex";
            });
        }
    </script>
    <script src="js/main.js"></script>
</body>

</html>