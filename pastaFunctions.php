<!--
Name: Dylan Rumph
Date: September 26, 2017
Course: CSCI E-15: Dynamic Web Applications
Project: Project 2 - Web Form Submission Application
-->
<?php
require 'Form.php';
require 'Pasta.php';

function getPastaError($post)
{
    //Create Form and Pasta objects with the POST data
    $form = new DWA\Form($post);
    $pasta = new P2\Pasta($post);
    //Verify that quantity has been entered and is in the required numerical range
    if ($form->isSubmitted()) {
        $data = $pasta->getData();
    }
    if($data['pasta']=='choose'){
        $pastaError = true;
    }
    else{
        $pastaError = false;
    }
    return $pastaError;
}
function getQuantError($post)
{
    //Create Form and Pasta objects with the POST data
    $form = new DWA\Form($post);
    //Verify that quantity has been entered and is in the required numerical range
    if ($form->isSubmitted()) {
        $errors = $form->validate(['quantity' => 'required|numeric|min:0|max:33']);
    }
    //If the data is valid proceed to process the form
    if(empty($errors)){
        $quantError = false;
    }
    else {
        $quantError = true;
    }
    return $quantError;
}
function getResults($post)
{
    //Create Form and Pasta objects with the POST data
    $form = new DWA\Form($post);
    $pasta = new P2\Pasta($post);
    //Verify that quantity has been entered and is in the required numerical range
    if ($form->isSubmitted()) {
        $results = $pasta->getData();
    }
    return $results;
}
function getErrors($post)
{
    //Create Form and Pasta objects with the POST data
    $form = new DWA\Form($post);
    //Verify that quantity has been entered and is in the required numerical range
    if ($form->isSubmitted()) {
        $errors = $form->validate(['quantity' => 'required|numeric|min:0|max:33']);
    }
    return $errors;
}
