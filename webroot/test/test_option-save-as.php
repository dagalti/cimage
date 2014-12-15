<?php
// Include config for all testcases
include __DIR__ . "/config.php";



// The title of the test case
$title = "Testing option save-as - save image to another format";



// Provide a short description of the testcase.
$description = "";



// Use these images in the test
$images = array(
    'car.png',
    'ball24.png',
    'wider.jpg',
);



// For each image, apply these testcases
$nc = "&nc"; //null; //&nc'; 
$testcase = array(
    $nc . '&w=300&sa=jpg',
    $nc . '&w=300&sa=png',
    $nc . '&w=300&sa=gif',
    $nc . '&w=300&sa=png&palette',
);



// Apply testcases and present results
include __DIR__ . "/template.php";
