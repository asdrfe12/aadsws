<?php
session_start();
include('proceses/dbconfig.php');

if (!isset($_SESSION['id'])) {
    header('location:./index.php?error=1');
}

$id = $_SESSION['id'];
$query = "SELECT * FROM files WHERE userId='$id'";

$result = mysqli_query($conn, $query);
//$row = mysqli_fetch_array($result);
$num_row = mysqli_num_rows($result);

if($num_row == 0){
    header('location:./Add_file.php');
}

$num = 0;
if(isset($_GET['file'])){
    $num = $_GET['file'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <?php $i=0; while($r = mysqli_fetch_assoc($result)) { if((int)$num == $i)$row = $r; $i = $i +1; } ?>
   
        <div class="result_cont">
            <div class="content_left">
                <div class="left_top">
                    <div style="width: 100px;">
                        <img src="images/Logo2.png" style="width: 100%;" alt="">
                    </div>
                    <div style="width: 100%;display: flex;align-items: center;gap: 5px;padding-top: 50px;font-weight: 500;">
                        <span>From oldest</span>
                        <div style="width: 25px;">
                            <img src="images/bx_sort.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <?php for($j =0 ; $j < $num_row ; $j ++){ ?>
                    <div class="text-center pt-3">
                        <a href="Result.php?file=<?php echo $j; ?>"><span style="font-weight: 500;">File <?php echo $j +1; ?></span><a>
                    </div>
                    <?php } ?>
                   
                </div>
                <div class="left_bottom">
                    <div class="text-center">
                        <a style="font-family: 'Inter';font-style: normal;font-weight: 400;color: #fff;" href="index.php">Home</a>
                    </div>
                    <div class="profile_img_con" style="width: 60px;">
                        <img src="images/iconamoon_profile-circle-fill.png" style="width: 100%;" alt="">
                    </div>

                </div>
            </div>

            <div class="content_right">
                <div class="container">
                    <div class="right_title">
                        <span>Data analysis for <span style="color: rgba(255, 144, 14, 1);"><?php echo $row['file']; ?></span></span>
                        <!-- <form action="">
                            <input type="submit" value="Save" class="GO">
                        </form> -->
                    </div>
                    <div style="background: #fff;border-radius: 10px;padding: 20px;">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text2">Date type for analyze</span>
                            </div>
                            <div class="col-md-6">
                                <div class="Options_container ms-auto">
                                    <?php if($row['week'] != "on" && $row['month'] != "on") {?> <span id="option1" style="background: rgba(255, 144, 14, 0.6);color:#fff;";>General</span> <?php } ?>
                                    <?php if($row['week'] == "on") { ?><span id="option2" style=" background: rgba(255, 144, 14, 0.6);color:#fff;"; ?>Weekly</span><?php } ?>
                                    <?php if($row['month'] == "on") { ?><span id="option3" style="background: rgba(255, 144, 14, 0.6);color:#fff;"; ?>Monthly</span><?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row mt-5" id="month" style="display: none;">
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
                        </div> -->
                        <!-- <div class="row mt-5" id="week" style="display: none;">
                            <div class="top-section">
                                <span>Choose week:</span>
                            </div>
                            <div class="bottom-section">
                                <div class="section_content">
                                    <div class="radio_item">
                                        <input type="radio" id="Week_1" name="Week">
                                        <label for="Week_1">Week 1</label>
                                    </div>
                                    <div class="radio_item">
                                        <input type="radio" id="Week_2" name="Week">
                                        <label for="Week_2">Week 2</label>
                                    </div>
                                    <div class="radio_item">
                                        <input type="radio" name="Week" id="Week_3">
                                        <label for="Week_3">Week 3</label>
                                    </div>
                                    <div class="radio_item">
                                        <input type="radio" name="Week" id="Week_4">
                                        <label for="Week_4">Week 4</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row my-3" style="padding: 20px;background: #fff;border-radius: 10px;margin: 0px;">
                        <div class="col-md-6">
                            <span class="text2">Most selling month</span>
                            <div style="display: flex;align-items: center;gap: 5px;width: 100%;margin-top: 30px;">
                                <div class="box_item">
                                    <span><?php echo $row['mostselling']; ?> - 2023</span>
                                    <h3><?php echo $row['mostselling_pieces']; ?>piece</h3>
                                </div>
                                <div style="width: 100px;">
                                    <img src="images/Bear market.png" style="width: 100%;" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <span class="text2">Less selling day</span>
                            <div style="display: flex;align-items: center;gap: 5px;width: 100%;margin-top: 30px;">
                                <div class="box_item">
                                    <span><?php echo $row['minselling']; ?> - 2023</span>
                                    <h3><?php echo $row['minselling_pieces']; ?> piece</h3>
                                </div>
                                <div style="width: 100px;">
                                    <img src="images/f.png" style="width: 100%;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="row my-3" style="padding: 20px;background: #fff;border-radius: 10px;margin: 0px;">
                        <div class="col-md-12">
                            
                            <span class="text2">Sales number</span>
                            <div class="slide-container swiper">
                                <div class="slide-content">
                                    <div class="card-wrapper swiper-wrapper">
                                        <div class="card swiper-slide">
                                            <div class="image-content">
                                                <span class="overlay"></span>

                                                <div class="card-image">
                                                    <img src="images/profile1.jpg" alt="" class="card-img">
                                                </div>
                                            </div>

                                            <div class="card-content" style="min-height: 120px;">
                                                <div style="display: flex;align-items: center;gap: 5px;width: 100%;justify-content: space-around;height: 120px;">
                                                    <div>
                                                        <span>Month <?php echo $row['mostselling']; ?></span>
                                                        <h3><?php echo $row['mostselling_pieces']; ?> piece</h3>
                                                    </div>
                                                    <div style="width: 40px;">
                                                        <img src="images/gh.png" style="width: 100%;" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card swiper-slide">
                                            <div class="image-content">
                                                <span class="overlay"></span>

                                                <div class="card-image">
                                                    <img src="images/profile1.jpg" alt="" class="card-img">
                                                </div>
                                            </div>

                                            <div class="card-content" style="min-height: 120px;">
                                                <div style="display: flex;align-items: center;gap: 5px;width: 100%;justify-content: space-around;height: 120px;">
                                                    <div>
                                                        <span>Month <?php echo $row['minselling']; ?></span>
                                                        <h3><?php echo $row['minselling_pieces']; ?> piece</h3>
                                                    </div>
                                                    <div style="width: 40px;">
                                                        <img src="images/gh.png" style="width: 100%;" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="swiper-button-next swiper-navBtn"></div>
                                <div class="swiper-button-prev swiper-navBtn"></div>
                                <div class="swiper-pagination"></div>
                            </div>






                        </div>
                    </div>
                    <!--  -->
                    <div class="row my-3" style="margin: 0px;display: flex;gap: 10px;justify-content: space-between;">
                        <div class="col-md-5" style="background: #fff;border-radius: 10px;padding: 20px;">
                            <span class="text2">Most selling</span>
                            <div class="con">
                                <div style="width: 400px;margin: auto;">
                                    <img src="images/pie<?php echo (int)$num; ?>.png" style="width: 100%;" alt="">
                                </div>
                                <div class="product_row">
                                    <div class="product">
                                        <div class="Square" style="background: #ACEBA2;"></div>
                                        <span>Month</span>
                                        <!-- <span style="color: rgba(253, 93, 118, 1);padding-left: 10px;">40%</span> -->
                                    </div>
                                    <div class="product">
                                        <div class="Square" style="background: #FF900E;"></div>
                                        <span>Sales</span>
                                        <!-- <span style="color: rgba(253, 93, 118, 1);padding-left: 10px;">40%</span> -->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6" style="background: #fff;border-radius: 10px;padding: 20px;width: 56%;">
                            <span class="text2">Most selling</span>
                            <div class="con">
                                <div style="width: 400px;margin: auto;">
                                    <img src="images/bar<?php echo (int)$num; ?>.png" style="width: 100%;" alt="">
                                </div>
                                <div class="product_row" style="justify-content: space-between;">
                                    <div class="product">
                                        <div class="Square" style="background: #ACEBA2;"></div>
                                        <span>Month</span>
                                    </div>
                                    <div class="product">
                                        <!-- <span style="color: rgba(253, 93, 118, 1);padding-left: 10px;">1190SAR</span> -->
                                        <div class="Square" style="background: #FF900E;"></div>
                                        <span>Sales</span>
                                    </div>
                                    <div class="product">
                                        <!-- <span style="color: rgba(253, 93, 118, 1);padding-left: 10px;">280SAR</span> -->
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>




                    <div class="row my-3" style="margin: 0px;display: flex;gap: 10px;justify-content: space-between;">
                        <div class="col-md-5" style="background: #fff;border-radius: 10px;padding: 20px;">
                            <span class="text2">Selling vs Spending</span>
                            <div class="con">
                                <div style="width: 400px;margin: auto;">
                                    <img src="images/line<?php echo (int)$num; ?>.png" style="width: 100%;" alt="">
                                </div>
                                <div class="product_row">
                                    <div class="product">
                                        <div class="Square" style="background: #ACEBA2;"></div>
                                        <span>Selling</span>
                                        <!-- <span style="color: rgba(253, 93, 118, 1);padding-left: 10px;">40%</span> -->
                                    </div>
                                    <div class="product">
                                        <div class="Square" style="background: #FF900E;"></div>
                                        <span>Spending</span>
                                        <!-- <span style="color: rgba(253, 93, 118, 1);padding-left: 10px;">40%</span> -->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6" style="background: #fff;border-radius: 10px;padding: 20px;width: 56%;">
                            <span class="text2">Selling vs Spending</span>
                            <div class="con">
                                <div style="width: 400px;margin: auto;">
                                    <img src="images/scatter<?php echo (int)$num; ?>.png" style="width: 100%;" alt="">
                                </div>
                                <div class="product_row" style="justify-content: space-between;">
                                    <div class="product">
                                        <div class="Square" style="background: #ACEBA2;"></div>
                                        <span>Selling</span>
                                    </div>
                                    <div class="product">
                                        <!-- <span style="color: rgba(253, 93, 118, 1);padding-left: 10px;">1190SAR</span> -->
                                        <div class="Square" style="background: #FF900E;"></div>
                                        <span>Spending</span>
                                    </div>
                                    <div class="product">
                                        <!-- <span style="color: rgba(253, 93, 118, 1);padding-left: 10px;">280SAR</span> -->
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
        </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>