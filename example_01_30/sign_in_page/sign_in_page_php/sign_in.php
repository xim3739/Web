<?php
    $inputId = $_POST['inputId'];
    $inputPassword = $_POST['inputPassword'];
    $inputName = $_POST['inputName'];
    $inputFirstEmail = $_POST['inputFirstEmail'];
    $inputSecondEmail = $_POST['inputSecondEmail'];
    $inputDate = $_POST['inputDate'];
    $gender = $_POST['gender'];

    echo "ID : {$inputId} <br/>";
    echo "PASS : {$inputPassword} <br/>";
    echo "NAME : {$inputName} <br/>";
    echo "EMAIL : {$inputFirstEmail} @ ";
    echo "{$inputSecondEmail} <br/>";
    echo "DATE : {$inputDate} <br/>";
    echo "GENDER : {$gender} <br/>";
?>