<!--
Name: Dylan Rumph
Date: September 26, 2017
Course: CSCI E-15: Dynamic Web Applications
Project: Project 2 - Web Form Submission Application
-->
<?php
require 'Form.php';
require 'Pasta.php';

//Checks the dropdown input for errors
function getPastaError($post)
{
    //Create Pasta object with the POST data
    $pasta = new P2\Pasta($post);
    //Get the pasta data
    $data = $pasta->getData();
    //Check for errors and set the value accordingly
    if($data['pasta']=='choose'){
        $pastaError = true;
    }
    else{
        $pastaError = false;
    }
    return $pastaError;
}
//Checks the numerical text input for errors
function getQuantError($post)
{
    //Create Form object with the POST data
    $form = new DWA\Form($post);
    //Verify that quantity has been entered and is in the required numerical range
    $errors = $form->validate(['quantity' => 'required|numeric|min:0|max:33']);
    //Check for errors and set the value accordingly
    if(empty($errors)){
        $quantError = false;
    }
    else {
        $quantError = true;
    }
    return $quantError;
}
//Returns the results of pasta data processing
function getResults($post)
{
    //Create Pasta object with the POST data
    $pasta = new P2\Pasta($post);
    //If the form has been submitted get the pasta data
    $results = $pasta->getData();

    return $results;
}
