<!DOCTYPE html>
<!--
Name: Dylan Rumph
Date: September 26, 2017
Course: CSCI E-15: Dynamic Web Applications
Project: Project 2 - Web Form Submission Application
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Pasta Guide</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="project2.css">
        <link rel="browser icon" href="images/favicon.png">
    </head>
    <body>
        <h1 class='text-center'>Pasta Cooking Guide</h1>
        <div class='container'>
            <h4>This is an easy guide to help you cook perfect pasta.  Simply fill out the form below with
            some basic information about the pasta you would like to cook, how much you plan to cook and what
            kind of consistency you would like the pasta to have.</h4>
        </div>
        <!-- User Input Form -->
        <div class='container'>
            <div class='panel panel-info'>
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <form method='POST' action='pastaInfo.php'>
                        <!-- Drop down menu to select the type of pasta the user is cooking -->
                        <div class='form-group'>
                            <label for='pasta'>Select which type of pasta you want to cook</label>
                            <select name='pasta' id='pasta'>
                                <option value='choose'>Choose a pasta...</option>
                                <option value='penne'>Penne</option>
                                <option value='rigatoni'>Rigatoni</option>
                                <option value='rotini'>Rotini</option>
                                <option value='ziti'>Ziti</option>
                                <option value='spaghetti'>Spaghetti</option>
                                <option value='vermicelli'>Vermicelli</option>
                                <option value='fettuccine'>Fettuccine</option>
                                <option value='linguine'>Linguine</option>
                                <option value='farfalle'>Farfalle</option>
                            </select>
                        </div>
                        <!--
                        Numerical input for the amount of pasta to be cooked
                        Value is set to default of 8 and must be between 1-32
                        -->
                        <div class='form-group'>
                            <label for='quantity'> Ounces of dry pasta to be cooked (1-32): </label>
                            <input type='number' name='quantity' min='1' max='32' id='quantity'>
                        </div>
                        <!-- Radio button for the type of cook on the pasta, defaults to al dente -->
                        <div class='form-group'>
                            <fieldset class='radios'>
                                <legend>What consistency would you like the pasta?</legend>
                                <label><input type='radio' name='cook' value='al dente' checked='checked'> Al dente</label>
                                <label><input type='radio' name='cook' value='soft'> Soft</label>
                            </fieldset>
                        </div>
                        <!-- Form submission buttion -->
                        <div class='form-group'>
                            <input type='submit' class='btn btn-primary btn-sm'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
