<!DOCTYPE html>
<!--
Name: Dylan Rumph
Date: September 20, 2017
Course: CSCI E-15: Dynamic Web Applications
Project: Project 2 - Web Form Submission Application
-->
<?php require 'pastaFunctions.php';
$data = getData($_POST);
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
        <?php if($data['pasta']=='choose'): ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> You did not choose a type of pasta.
            </div>
        <!-- If a pasta was chosen then display the instructions paragraph -->
        <?php else: ?>
            <div class='container'>
                <div class='panel panel-info'>
                    <div class="panel-heading"><h1 class='text-center'>Pasta Cooking Instructions</h1></div>
                    <h3 class='text-justify'>To cook <?=$data['quantity']?> ounces of <?=$data['pasta']?> with <?=$data['cook']?> consistency,
                        you will first need to bring <?=$data['water']?> quarts of very salty water to a hard boil.
                        Next, you add in the full amount of pasta while occasionally stirring for the first 2 minutes.
                        Remember to keep the heat high so that the water stays at a hard boil the entire time. The desired
                        cooking time to achieve <?=$data['cook']?> <?=$data['pasta']?> will be <?=$data['time']?> minutes. After the pasta has
                        boiled for this amount of time, reserve 1/8 cup of the pasta water and then strain the pasta.
                        Place the pasta into a large sauce pan and combine with reserved pasta water and warmed pasta sauce. Heat
                        together for 2 minutes. You will have approximately <?=$data['yield']?> servings of <?=$data['pasta']?> to enjoy!
                    </h3>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>
