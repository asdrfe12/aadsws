<div class="nav_container">
    <div style="width: 100px;">
        <img src="images/Logo2.png" style="width: 100%;" alt="">
    </div>
    <ul>
        <li>
            <a href="index.php">
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="Add_file.php">
                <span>Let’s begin</span>
            </a>
        </li>
        <li>
            <a href="index.php#about">
                <span>About</span>
            </a>
        </li>
        <li>
            <a href="Result.php">
                <span>Analytics</span>
            </a>
        </li>
    </ul>

    <?php
        if(isset($_SESSION['id'])){
    ?>
    <span class="login" id="login_btn" style="background: transparent;">
        <div class="profile_img_con" style="width: 40px;height: 40px;">
            <a href="profile.php"><img src="images/iconamoon_profile-circle-fill.png" style="width: 100%;" alt=""></a>
        </div>
    </span>
    <?php }else{ ?>
    <span class="login">
        <div style="width: 35px;">
        <a href="login.php"><img src="images/mdi-light_login.png" style="width: 100%;" alt=""></a>
        </div>
        <span>Login</span>
    </span>
    <?php } ?>


    
</div>