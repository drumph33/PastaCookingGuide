<!--
Name: Dylan Rumph
Date: September 20, 2017
Course: CSCI E-15: Dynamic Web Applications
Project: Project 2 - Web Form Submission Application
-->
<?php
function getData(array $input)
    {
        //Initialize variables that may not get initialized otherwise which causes errors
        //$pasta = '';
        $alDenteTime = 1;
        $softTime = 2;
        $div = 1; #determines the yield of the pasta, long pasta uses 1.5 short pasta uses 2
        //Process the drop down menu selection of type of pasta
        //Each type of pasta has two separate cooking times and a value to calculate the amount of servings
        //if (isset($input['pasta'])) {
        $pasta = $input['pasta'];
        //Set variable values for each type of pasta
        switch ($pasta){
            case 'farfalle':
                $alDenteTime = 13;
                $softTime = 15;
                $div = 1.5;
                break;
            case 'ziti':
                $alDenteTime = 14;
                $softTime = 15;
                $div = 1.5;
                break;
            case 'vermicelli':
                $alDenteTime = 5;
                $softTime = 7;
                $div = 2;
                break;
            case 'rigatoni':
                $alDenteTime = 12;
                $softTime = 15;
                $div = 1.5;
                break;
            case 'rotini':
                $alDenteTime = 8;
                $softTime = 10;
                $div = 1.5;
                break;
            case 'spaghetti':
                $alDenteTime = 8;
                $softTime = 10;
                $div = 2;
                break;
            case $pasta == 'penne':
                $alDenteTime = 9;
                $softTime = 13;
                $div = 1.5;
                break;
            case $pasta == 'linguine':
                $alDenteTime = 9;
                $softTime = 13;
                $div = 2;
                break;
            default:
                $alDenteTime = 11;
                $softTime = 13;
                $div = 2;
                break;
            }

        //Process the radio button values.  Since a default value was set there is no error case.
        //Sets cooking time to the appropiate value from the above list
        $cook = $input['cook'];

        if ($cook == 'soft'){
                $time = $softTime;
        }else{
                $time = $alDenteTime;
            }
        //Process the quantity from the numerical text input
        //Sets the amount of water needed based on the amount of pasta to be cooked
        $quantity = $input['quantity'];
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

        //Calculates how many servings will be made by using the scalar set in the pasta list and the input quantity. Rounds to one decimal place
        $yield = round($quantity/$div, 1);
        $results = [
            'pasta'=>$pasta,
            'cook'=>$cook,
            'quantity'=>$quantity,
            'time'=>$time,
            'water'=>$water,
            'yield'=>$yield,
        ];
        return $results;
    }
