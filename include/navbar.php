<div class="container-fluid" >
    <a href="home" ><img src="<?php if (strlen($vet_name) > 0) { echo "../"; } ?>image/ORGANIC.png" class="mx-auto d-block" width="150" height="150"></a>
</div>
<?php 
    $request = $_SERVER['REQUEST_URI'];
    $router = str_replace('/organicproject/','',$request);
?>
<nav class="navbar navbar-expand-sm bg-white   sticky-top" style="font-size: 18px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-align-justify"></i>
    </button>
    <div class="collapse navbar-collapse  justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item" style="margin-left:50px;">
                <a class="nav-link" href="<?php if (strlen($vet_name) > 0) { echo "../"; } ?>home" style="<?php if ($router == "home" || $router == "") { echo "color: #4d9900;border-top: solid#4d9900 ;"; } else { echo ""; }?>"><?=MENU_HOME?></a>
            </li>
            <li class="nav-item" style="margin-left:50px;">
                <a class="nav-link" href="<?php if (strlen($vet_name) > 0) { echo "../"; } ?>difference" style="<?php if ($router == "difference") { echo "color: #4d9900;border-top: solid#4d9900 ;"; } else { echo ""; }?>"><?=MENU_DIFFERENCE?></a>
            </li>
            <li class="nav-item" style="margin-left:50px;">
                <a class="nav-link" href="<?php if (strlen($vet_name) > 0) { echo "../"; } ?>vegetable" style="<?php if (strlen(strpos($router,"vegetable")) > 0 ){ echo "color: #4d9900;border-top: solid#4d9900 ;"; } else { echo ""; }?>"><?=MENU_PRODUCT?></a>
            </li>
            <li class="nav-item" style="margin-left:50px;">
                <a class="nav-link" href="<?php if (strlen($vet_name) > 0) { echo "../"; } ?>salad" style="<?php if ($router == "salad") { echo "color: #4d9900;border-top: solid#4d9900 ;"; } else { echo ""; }?>"><?=MENU_DRESSING?></a>
            </li>
            <li class="nav-item" style="margin-left:50px;">
                <a class="nav-link" href="<?php if (strlen($vet_name) > 0) { echo "../"; } ?>about" style="<?php if ($router == "about") { echo "color: #4d9900;border-top: solid#4d9900 ;"; } else { echo ""; }?>"><?=MENU_ABOUT?></a>
            </li>
            <li class="nav-item dropdown" style="margin-left:50px;">
                <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-globe-africa"></i></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php if (strlen($vet_name) > 0) { echo "../"; } ?>include/change.php?lang=TH">TH</a></li>
                    <li><a class="dropdown-item" href="<?php if (strlen($vet_name) > 0) { echo "../"; } ?>include/change.php?lang=EN">EN</a></li>
                </ul>
            </li>
        </ul>
    </div>  
</nav>
