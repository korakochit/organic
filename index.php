<?php
    $request = $_SERVER['REQUEST_URI'];
    $router = str_replace('/organic/','',$request);

    $arr = explode('/',$router);
    $vet_name = '';
    if (isset($arr[1])) {
        $vet_name = $arr[1];
    }

    switch ($router) {
        case 'home':
            include('home.php');
            break;
        case 'difference':
            include('difference.php');
            break;
        case 'salad':
            include('salad.php');
            break;
        case 'about':
            include('about.php');
            break;
        case 'vegetable' || preg_match("/vegetable\/[a-zA-Z]/i",$router) :
            include('vegetable.php');
            break;
        default:
            include('home.php');
            break;
    }
?>