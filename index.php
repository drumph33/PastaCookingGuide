<!DOCTYPE html>
<!--
Name: Dylan Rumph
Date: September 19, 2017
Course: CSCI E-15: Dynamic Web Applications
Project: Project 2 - Web Form Submission Application
-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DWA 15 Project 2</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
        <!--<link rel="stylesheet" type="text/css" href="project2.css">-->
    </head>

    <body>


        <h1>Pasta Cooking Guide</h1>

        <!-- User Input Form -->
        <form method='POST' action='pastaInfo.php'>
            <!-- Drop down menu to select the type of pasta the user is cooking -->
            <div class='form-group'>
                <label for='pasta'>Select which type of pasta you want to cook</label>
                <select name='pasta' id='pasta'>
                    <option value='choose'>Choose a pasta...</option>
                    <option value='Penne'>Penne</option>
                    <option value='Rigatoni'>Rigatoni</option>
                    <option value='Rotini'>Rotini</option>
                    <option value='Ziti'>Ziti</option>
                    <option value='Spaghetti'>Spaghetti</option>
                    <option value='Vermicelli'>Vermicelli</option>
                    <option value='Fettuccine'>Fettuccine</option>
                    <option value='Linguine'>Linguine</option>
                    <option value='Farfalle'>Farfalle</option>
                </select>
            </div>
            <!--
            Numerical input for the amount of pasta to be cooked
            Value is set to default of 8 and must be between 1-32
            -->
            <div class='form-group'>
                <label for='quantity'> Ounces of Pasta (1-32): </label>
                <input type='number' name='quantity' min='1' max='32' value='8'>
            </div>

            <!-- Radio button for the type of cook on the pasta, defaults to al dente -->
            <div class='form-group'>
                <fieldset class='radios'>
                    <legend>How would you like your pasta cooked?</legend>
                    <label><input type='radio' name='cook' value='al dente' checked='checked'> Al dente</label>
                    <label><input type='radio' name='cook' value='soft'> Soft</label>
                </fieldset>
            </div>

            <!-- Form submission buttion -->
            <div class='form-group'>
                <input type='submit' class='btn btn-primary btn-sm'>
            </div>





    </body>
</html>
