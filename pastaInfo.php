<!DOCTYPE html>
<?php
require('helpers.php');

$pasta = '';
$break = false;
$time1 = 1;
$time2 = 2;
$div = 1;

if (isset($_POST['pasta'])) {
    $pasta = $_POST['pasta'];
    if($pasta == 'choose'){
        $break = true;
    }elseif ($pasta == 'farfalle') {
        $time1 = 13;
        $time2 = 15;
        $div = 2.5;
    } elseif ($pasta == 'ziti') {
        $time1 = 14;
        $time2 = 15;
        $div = 2.5;
    } elseif ($pasta == 'vermicelli') {
        $time1 = 5;
        $time2 = 7;
        $div = 2;
    } elseif ($pasta == 'rigatoni') {
        $time1 = 12;
        $time2 = 15;
        $div = 2.5;
    } elseif ($pasta == 'rotini') {
        $time1 = 8;
        $time2 = 10;
        $div = 2.5;
    } elseif ($pasta == 'spaghetti') {
        $time1 = 8;
        $time2 = 10;
        $div = 2;
    }elseif ($pasta == 'penne') {
        $time1 = 9;
        $time2 = 13;
        $div = 2.5;
    } elseif ($pasta == 'linguine') {
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
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DWA 15 Project 2</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body>
        <?php if($break): ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> You did not choose a type of pasta.
            </div>
        <?php else: ?>
            <div class='container'>
                <div class='panel panel-info'>
                    <div class="panel-heading"><h1 class='text-center'>Pasta Cooking Instructions</h1></div>

        <h3>To cook <?=$quantity?> ounces of <?=$pasta?> with <?=$cook?> consistency,
            you will first need to bring <?=$water?> quarts of very salty water to a hard boil.
            Next, you add in the full amount of pasta while occasionally stirring for the first two minutes.
            Remember to keep the heat high so that water stays at a hard boil the entire time.
            <?=$pasta?> with a <?=$cook?> consistency will take <?=$time?> total minutes to finish cooking.
            Once this time has passed reserve 1 cup of the pasta water and then strain the pasta.
            Place the pasta into a large sauce pan and combine with reserved pasta water and warmed pasta sauce. Heat
            together for 2 minutes. You will have approximately <?=$yield?> servings of <?=$pasta?> to enjoy! </h2>
        <?php endif; ?>
