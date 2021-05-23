<title>ORGANIC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.3.1/css/all.css">
<style>
.carousel-inner img {
    width: 100%;
    height: 520px;
}
a.nav-link {
    color: black;
}
a.nav-link:hover {
    transition: 0.2s;
    color: #4d9900;
    border-top: solid#4d9900;
}
.dropdown-item:hover {
    color: #4d9900;
}
@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{  }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}
</style>
<?php 
    error_reporting(0); 
    session_start();
    if($_SESSION["lang"] == "EN") {
        include("constEN.php");
    } else {
        include("constTH.php");
    }
?>