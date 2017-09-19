<?php
require('helpers.php');
$pasta = '';

if (isset($_POST['pasta'])) {
    $pasta = $_POST['pasta'];
    if ($pasta == 'choose') {
        $alertType = 'alert-danger';
        $results = 'Please choose a pasta.';
    } elseif ($pasta == 'Farfalle') {
        $time1 = 13;
        $time2 = 15;
        $div = 2.5;
    } elseif ($pasta == 'Ziti') {
        $time1 = 14;
        $time2 = 15;
        $div = 2.5;
    } elseif ($pasta == 'Vermicelli') {
        $time1 = 5;
        $time2 = 7;
        $div = 2;
    } elseif ($pasta == 'Rigatoni') {
        $time1 = 12;
        $time2 = 15;
        $div = 2.5;
    } elseif ($pasta == 'Rotini') {
        $time1 = 8;
        $time2 = 10;
        $div = 2.5;
    } elseif ($pasta == 'Spaghetti') {
        $time1 = 8;
        $time2 = 10;
        $div = 2;
    }elseif ($pasta == 'Penne') {
        $time1 = 9;
        $time2 = 13;
        $div = 2.5;
    } elseif ($pasta == 'Linguine') {
        $time1 = 9;
        $time2 = 13;
        $div = 2;
    }else {
        $time1 = 11;
        $time2 = 13;
        $div = 2;
    }
}
if (isset($_POST['cook'])) {
    $cook = $_POST['cook'];
    if ($cook == 'soft'){
        $time = $time2;
    }else{
        $time = $time1;
    }
}
if (isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
    if ($quantity <= 4){
        $water = 3;
    }elseif ($quantity <= 12){
        $water = 4;
    }elseif ($quantity <= 18){
        $water = 5;
    }elseif ($quantity <= 24){
        $water = 6;
    }elseif ($quantity <= 28){
        $water = 7;
    }else{
        $water = 8;
    }
}

$yield = $quantity / $div;
