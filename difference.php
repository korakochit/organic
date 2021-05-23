<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('include/header.php'); ?>
    </head>
    <body style="font-family: 'Kanit', sans-serif;">
        <?php include('include/navbar.php'); ?>
        <h2 style="font-size: 40px;text-align: center;"> 
            <div class="container-fluid" style="color: white;background: repeating-linear-gradient(to right, rgb(87, 142, 68) 0%, rgb(87, 142, 68) 100%);"><br><?=DIFFERENCE?><br><br></div>
        </h2>
        <br>
        <div class="container-fluid">
            <div class="row" >
                <div class="col-xl-3"><br><h5 style="text-align: center;"><?=ORGANIC?></h5><br><?=ORGANIC_DETAIL?></div>
                <div class="col-xl-3"><br><h5 style="text-align: center;"><?=HYDROPONIC?></h5><br><?=HYDROPONIC_DETAIL?></div>
                <div class="col-xl-3"><br><h5 style="text-align: center;"><?=ORGANIC_VEGETABLES?></h5><br><?=ORGANIC_VEGETABLES_DETAIL?></div>
                <div class="col-xl-3"><br><h5 style="text-align: center;"><?=HYGIENIC?></h5><br><?=HYGIENIC_DETAIL?></div>
            </div>
            <div class="row" >
                <div class="col-xl-3"><br><img src="image/diff1.jpg" class="mx-auto d-block"></div>
                <div class="col-xl-3"><br><img src="image/diff2.jpg" class="mx-auto d-block"></div>
                <div class="col-xl-3"><br><img src="image/diff3.jpg" class="mx-auto d-block"></div>
                <div class="col-xl-3"><br><img src="image/diff4.jpg" class="mx-auto d-block"></div>
            </div>
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-8"><br><br><img src="image/type1.png" class="mx-auto d-block" width="600" height="190"></div>
                <div class="col-xl-2"></div>
            </div>
        </div>
    </body>
   <br>
   <?php include('include/footer.php'); ?>
</html>
