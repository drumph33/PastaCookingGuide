<!DOCTYPE html>
<!--
Name: Dylan Rumph
Date: September 19, 2017
Course: CSCI E-15: Dynamic Web Applications
Project: Project 2 - Web Form Submission Application
-->
<?php
//Initialize variables that may not get initialized otherwise which causes errors
$pasta = '';
$break = false;
$time1 = 1;
$time2 = 2;
$div = 1;
//Process the drop down menu selection of type of pasta
//Each type of pasta has two separate cooking times and a value to calculate the amount of servings
if (isset($_POST['pasta'])) {
    $pasta = $_POST['pasta'];
    //If no pasta was chosen then set the break variable to true so that an error can be displayed later
    if($pasta == 'choose'){
        $break = true;
    //Set variable values for each type of pasta
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
//Process the radio button values.  Since a default value was set there is no error case.
//Sets cooking time to the appropiate value from the above list
if (isset($_POST['cook'])) {
    $cook = $_POST['cook'];
    if ($cook == 'soft'){
        $time = $time2;
    }else{
        $time = $time1;
    }
}
//Process the quantity from the numerical text input
//Sets the amount of water needed based on the amount of pasta to be cooked
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
//Calculates how many servings will be made by using the scalar set in the pasta list and the input quantity
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
        <!-- Display an error message if no pasta type was chosen-->
        <?php if($break): ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> You did not choose a type of pasta.
            </div>
        <!-- If a pasta was chosen then display the instructions paragraph -->
        <?php else: ?>
            <div class='container'>
                <div class='panel panel-info'>
                    <div class="panel-heading"><h1 class='text-center'>Pasta Cooking Instructions</h1></div>
                    <h3 class='text-justify'>To cook <?=$quantity?> ounces of <?=$pasta?> with <?=$cook?> consistency,
                        you will first need to bring <?=$water?> quarts of very salty water to a hard boil.
                        Next, you add in the full amount of pasta while occasionally stirring for the first two minutes.
                        Remember to keep the heat high so that the water stays at a hard boil the entire time. The desired
                        cooking time to achieve <?=$cook?> <?=$pasta?> will be <?=$time?> minutes. After the pasta has
                        boiled for this amount of time, reserve 1/8 cup of the pasta water and then strain the pasta.
                        Place the pasta into a large sauce pan and combine with reserved pasta water and warmed pasta sauce. Heat
                        together for 2 minutes. You will have approximately <?=$yield?> servings of <?=$pasta?> to enjoy!
                    </h3>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>
