<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        include('include/header.php');
        ?>
    </head>
    <body style="font-family: 'Kanit', sans-serif;">
        <?php include('include/navbar.php'); ?>
        <h2 style="font-size: 40px;text-align: center;">
            <div class="container-fluid"
                style="color: white;background: repeating-linear-gradient(to right, rgb(87, 142, 68) 0%, rgb(87, 142, 68) 100%);">
                <br><?=HOMEPAGE?><br><br></div>
        </h2>

        <div id="demo" class="carousel slide" data-ride="carousel"
            style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/slid5.jpg">
                    <div class="carousel-caption">
                        <h3><?=CAROUSEL?></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/slid6.jpg">
                    <div class="carousel-caption">
                        <h3><?=CAROUSEL?></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/slid7.jpg">
                    <div class="carousel-caption">
                        <h3><?=CAROUSEL?></h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="container-fluid"><br><br><br>
            <div class="row">
                <div class="col-xl-3"></div>
                <div class="col-xl-6" style="text-align: center;">
                    <p style="font-size: 30px;border-bottom: 5px solid #4d9900;color: #4d9900;"><b><?=WELCOME?></b></p>
                    <?=WELCOME_DETAIL?>
                </div>
                <div class="col-xl-3"></div>
            </div> <br><br><br>
        </div><br>

        <div class="container-fluid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <br><br><br>
            <div class="row">
                <div class="col-xl-3"></div>
                <div class="col-xl-6" style="text-align: center;">
                    <p style="font-size: 30px;border-bottom: 5px solid #4d9900;color: #4d9900;">
                        <b><?=MEANING_STICKER_LABEL?></b></p>
                    <div class="media p-3 " style="text-align: left;">
                        <img src="image/c1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        <div class="media-body">
                            <br>
                            <h4><?=GREEN_LABEL?> (Certified Organic)</h4>
                            <p><?=GREEN_LABEL_DETAIL?></p>
                        </div>
                    </div>
                    <div class="media p-3 " style="text-align: left;">
                        <img src="image/c2.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        <div class="media-body">
                            <br>
                            <h4><?=BLUE_LABEL?> (Organically Grown)</h4>
                            <p><?=BLUE_LABEL_DETAIL?></p>
                        </div>
                    </div>
                    <div class="media p-3 " style="text-align: left;">
                        <img src="image/c3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        <div class="media-body">
                            <br>
                            <h4><?=YELLOW_LABEL?> (Pesticide Safe)</h4>
                            <p><?=YELLOW_LABEL_DETAIL?></p>
                        </div>
                    </div>
                    <div class="media p-3 " style="text-align: left;">
                        <img src="image/c4.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        <div class="media-body">
                            <br>
                            <h4><?=WHITE_LABEL?> (Hydroponics)</h4>
                            <p><?=WHITE_LABEL_DETAIL?></p>
                        </div>
                    </div>
                    <div class="media p-3 " style="text-align: left;">
                        <img src="image/c5.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        <div class="media-body">
                            <br>
                            <h4><?=RED_LABEL?> (General)</h4>
                            <p><?=RED_LABEL_DETAIL?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3"></div>
            </div>
            <br><br><br>
        </div>
    </body>
    <?php include('include/footer.php'); ?>
</html>