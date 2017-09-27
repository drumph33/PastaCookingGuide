<!DOCTYPE html>
<!--
Name: Dylan Rumph
Date: September 20, 2017
Course: CSCI E-15: Dynamic Web Applications
Project: Project 2 - Web Form Submission Application
-->
<?php
require 'Form.php';
require 'Pasta.php';

$form = new DWA\Form($_POST);
$pasta = new P2\Pasta($_POST);

if ($form->isSubmitted()) {
    $errors = $form->validate(['quantity' => 'required|numeric|min:0|max:32']);
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DWA 15 Project 2</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="project2.css">
    </head>
    <?php
    //If the data is valid proceed to process the form
    if(empty($errors)){
        $data = $pasta->getData();
    }
    else { ?>
        <!-- If the data is not valid (no quantity) then display an error message-->
        <div class="alert alert-danger">
            <strong>Error!</strong> <?=$errors[0]?>
        </div>
    <!-- Break from displaying results if an error was detected-->
    <?php return;}?>
    <!-- Display an error message if no pasta type was chosen-->
    <?php if($data['pasta']=='choose'): ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> You did not choose a type of pasta.
            </div>
        <!-- If a pasta was chosen then display the results-->
    <?php else: ?>
        <body>
            <div class='container'>
                <h1 class='text-center'>Pasta Cooking Instructions</h1>
                <!-- The what you will need section-->
                <div class='panel-group'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'><h2 class='text-center'>What You Will Need</h2></div>
                        <div class='panel-body'>
                            <!-- Display the correct number of water images-->
                            <?php for($i = 0; $i < $data['water']; $i++): ?>
                                <img src="images/water.jpg" alt="quart of water" height='80' width='80'>
                            <?php endfor; ?>
                            <!-- Display the other images and text to sum up-->
                            <img src='images/salt.jpg' alt='salt' height='80' width='80'>
                            <img src='images/pot.png' alt='pot' height='80' width='80'>
                            <img src='images/pan.png' alt='pan' height='80' width='80'>
                            <img src='images/sauce.png' alt='sauce' height='80' width='100'>
                            <img src="images/<?=$data['pasta']?>.jpg" alt="pasta" height='80' width='80'>
                            <h3 class='text-justify'><?=$data['water']?> quarts of water, lots of salt, a large pot, a large sauce pan, a sauce of your choosing,
                                 and <?=$data['quantity']?> oz. of dry <?=$data['pasta']?></h3>
                        </div>
                    </div>
                    <!-- Directions paragraph-->
                    <div class='panel panel-info'>
                            <div class='panel-heading'><h2 class='text-center'>Directions</h2></div>
                            <div class='panel-body'>
                            <h3 class='text-justify'>To cook <?=$data['quantity']?> ounces of <?=$data['pasta']?> with <?=$data['cook']?> consistency,
                            you will first need to bring <?=$data['water']?> quarts of very salty water to a hard boil.
                            Next, you add in the full amount of pasta while occasionally stirring for the first 2 minutes.
                            Remember to keep the heat high so that the water stays at a hard boil the entire time. The desired
                            cooking time to achieve <?=$data['cook']?> <?=$data['pasta']?> will be <?=$data['time']?> minutes. After the pasta has
                            boiled for this amount of time, reserve 1/8 cup of the pasta water and then strain the pasta.
                            Place the pasta into a large sauce pan and combine with reserved pasta water and warmed pasta sauce. Heat
                            together for 2 minutes. Top with herbs or cheese to your liking.  You will have approximately <?=$data['yield']?> servings of <?=$data['pasta']?> to enjoy!
                            </h3>
                        </div>
                    </div>
                </div>
                <img class='img-responsive' src="images/cook<?=$data['pasta']?>.jpg" alt="cooked pasta">
            </div>
        <?php endif; ?>
    </body>
</html>
