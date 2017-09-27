<?php
require 'Form.php';
require 'Pasta.php';
//Create Form and Pasta objects with the POST data
$form = new DWA\Form($_POST);
$pasta = new P2\Pasta($_POST);
//Verify that quantity has been entered and is in the required numerical range
if ($form->isSubmitted()) {
    $errors = $form->validate(['quantity' => 'required|numeric|min:0|max:33']);
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
