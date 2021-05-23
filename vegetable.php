<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('include/header.php'); ?>
    </head>
    <body style="font-family: 'Kanit', sans-serif;">
         <?php include('include/navbar.php'); ?>
        <?php
        // strtoupper("Hello WORLD!");
        if (strlen($vet_name) > 0) {
            $vegetableboolean = FALSE;
            switch ($vet_name) {
                case 'greenoak':
                    $vegetableboolean = TRUE;
                    break;
                case 'redoak':
                    $vegetableboolean = TRUE;
                    break;
                case 'greencos':
                    $vegetableboolean = TRUE;
                    break;
                case 'iceberg':
                    $vegetableboolean = TRUE;
                    break;
                case 'butterhead':
                    $vegetableboolean = TRUE;
                    break;
                case 'greencoral':
                    $vegetableboolean = TRUE;
                    break;
                case 'redcoral':
                    $vegetableboolean = TRUE;
                    break;
                case 'greenbuttervia':
                    $vegetableboolean = TRUE;
                    break;
                case 'redbuttervia':
                    $vegetableboolean = TRUE;
                    break;
                case 'greenbow':
                    $vegetableboolean = TRUE;
                    break;
                case 'mizuna':
                    $vegetableboolean = TRUE;
                    break;
                case 'frilliceiceberg':
                    $vegetableboolean = TRUE;
                    break;
                case 'spinach':
                    $vegetableboolean = TRUE;
                    break;
                case 'greenezfamily':
                    $vegetableboolean = TRUE;
                    break;
                case 'redezfamily':
                    $vegetableboolean = TRUE;
                    break;
                case 'swisschard':
                    $vegetableboolean = TRUE;
                    break;
                case 'babysalad':
                    $vegetableboolean = TRUE;
                    break;
                case 'sunflower':
                    $vegetableboolean = TRUE;
                    break;
                case 'microgreen':
                    $vegetableboolean = TRUE;
                    break;
                case 'rocket':
                    $vegetableboolean = TRUE;
                    break;
            }
            if ($vegetableboolean === TRUE) {
        ?>
                <h2 style="font-size: 40px;text-align: center;"> 
                    <div class="container-fluid" style="color: white;background: repeating-linear-gradient(to right, rgb(87, 142, 68) 0%, rgb(87, 142, 68) 100%);">
                    <br><?php
                        switch ($vet_name) {
                            case 'greenoak':
                                echo VET_GREENOAK;
                                break;
                            case 'redoak':
                                echo VET_REDOAK;
                                break;
                            case 'greencos':
                                echo VET_GREENCOS;
                                break;
                            case 'iceberg':
                                echo VET_ICEBERG;
                                break;
                            case 'butterhead':
                                echo VET_BUTTERHEAD;
                                break;
                            case 'greencoral':
                                echo VET_GREENCORAL;
                                break;
                            case 'redcoral':
                                echo VET_REDCORAL;
                                break;
                            case 'greenbuttervia':
                                echo VET_GREENBUTTERVIA;
                                break;
                            case 'redbuttervia':
                                echo VET_REDBUTTERVIA;
                                break;
                            case 'greenbow':
                                echo VET_GREENBOW;
                                break;
                            case 'mizuna':
                                echo VET_MIZUNA;
                                break;
                            case 'frilliceiceberg':
                                echo VET_FRILLICEICEBERG;
                                break;
                            case 'spinach':
                                echo VET_SPINACH;
                                break;
                            case 'greenezfamily':
                                echo VET_GREENEZFAMILY;
                                break;
                            case 'redezfamily':
                                echo VET_REDEZFAMILY;
                                break;
                            case 'swisschard':
                                echo VET_SWISSCHARD;
                                break;
                            case 'babysalad':
                                echo VET_BABYSALAD;
                                break;
                            case 'sunflower':
                                echo VET_SUNFLOWER;
                                break;
                            case 'microgreen':
                                echo VET_MICROGREEN;
                                break;
                            case 'rocket':
                                echo VET_ROCKET;
                                break;
                        }
                    ?><br><br></div>
                </h2>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2 col-md-1 col-lg-3" style="background-color:white;"></div>
                        <div class="col-10 col-md-5 col-lg-3"><img src="../image/<?=$vet_name?>.png" class="img-fluid" width="220" height="300"></div>
                        <div class="col-12 col-md-6 col-lg-4" style="background-color:white;">
                            <br>
                            <?php
                            switch ($vet_name) {
                                case 'greenoak':
                                    echo VET_GREENOAK_DETAIL;
                                    break;
                                case 'redoak':
                                    echo VET_REDOAK_DETAIL;
                                    break;
                                case 'greencos':
                                    echo VET_GREENCOS_DETAIL;
                                    break;
                                case 'iceberg':
                                    echo VET_ICEBERG_DETAIL;
                                    break;
                                case 'butterhead':
                                    echo VET_BUTTERHEAD_DETAIL;
                                    break;
                                case 'greencoral':
                                    echo VET_GREENCORAL_DETAIL;
                                    break;
                                case 'redcoral':
                                    echo VET_REDCORAL_DETAIL;
                                    break;
                                case 'greenbuttervia':
                                    echo VET_GREENBUTTERVIA_DETAIL;
                                    break;
                                case 'redbuttervia':
                                    echo VET_REDBUTTERVIA_DETAIL;
                                    break;
                                case 'greenbow':
                                    echo VET_GREENBOW_DETAIL;
                                    break;
                                case 'mizuna':
                                    echo VET_MIZUNA_DETAIL;
                                    break;
                                case 'frilliceiceberg':
                                    echo VET_FRILLICEICEBERG_DETAIL;
                                    break;
                                case 'spinach':
                                    echo VET_SPINACH_DETAIL;
                                    break;
                                case 'greenezfamily':
                                    echo VET_GREENEZFAMILY_DTAIL;
                                    break;
                                case 'redezfamily':
                                    echo VET_REDEZFAMILY_DTAIL;
                                    break;
                                case 'swisschard':
                                    echo VET_SWISSCHARD_DETAIL;
                                    break;
                                case 'babysalad':
                                    echo VET_BABYSALAD_DETAIL;
                                    break;
                                case 'sunflower':
                                    echo VET_SUNFLOWER_DETAIL;
                                    break;
                                case 'microgreen':
                                    echo VET_MICROGREEN_DETAIL;
                                    break;
                                case 'rocket':
                                    echo VET_ROCKET_DETAIL;
                                    break;
                                }
                            ?>
                        </div>
                        <div class="col-12 col-md-12 col-lg-2" style="background-color:white;"></div>
                    </div>
                </div>
        <?php 
            }else {
                header("location: ../vegetable");
            }   
        } else {
            // if (strlen(strpos($router,'vegetable')) > 0 ) { }
        ?>
            <h2 style="font-size: 40px;text-align: center;"> 
                <div class="container-fluid" style="color: white;background: repeating-linear-gradient(to right, rgb(87, 142, 68) 0%, rgb(87, 142, 68) 100%);"><br><?=PRODUCT?><br><br></div>
            </h2>
            <div class="container" style="background-color:white;">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/greenoak"><img class="img-fluid" src="image/greenoak.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/redoak"><img class="img-fluid" src="image/redoak.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/greencos"><img class="img-fluid" src="image/greencos.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/iceberg"><img class="img-fluid" src="image/iceberg.png" width="220" height="300"></a></div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/butterhead"><img class="img-fluid" src="image/butterhead.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/greencoral"><img class="img-fluid" src="image/greencoral.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/redcoral"><img class="img-fluid" src="image/redcoral.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/greenbuttervia"><img class="img-fluid" src="image/greenbuttervia.png" width="220" height="300"></a></div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/redbuttervia"><img class="img-fluid" src="image/redbuttervia.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/greenbow"><img class="img-fluid" src="image/greenbow.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/mizuna"><img class="img-fluid" src="image/mizuna.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/frilliceiceberg"><img class="img-fluid" src="image/frilliceiceberg.png" width="220" height="300"></a></div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/spinach"><img class="img-fluid" src="image/spinach.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/greenezfamily"><img class="img-fluid" src="image/greenezfamily.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/redezfamily"><img class="img-fluid" src="image/redezfamily.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/swisschard"><img class="img-fluid" src="image/swisschard.png" width="220" height="300"></a></div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/babysalad"><img class="img-fluid" src="image/babysalad.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/sunflower"><img class="img-fluid" src="image/sunflower.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/microgreen"><img class="img-fluid" src="image/microgreen.png" width="220" height="300"></a></div>
                    <div class="col-6 col-md-6 col-lg-3"><a href="vegetable/rocket"><img class="img-fluid" src="image/rocket.png" width="220" height="300"></a></div>
                </div>
            </div>
        <?php
        }
        ?>
    </body>
    <br><br><br>
    <?php include('include/footer.php'); ?>
</html>
