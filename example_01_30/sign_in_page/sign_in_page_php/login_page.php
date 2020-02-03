<?php
    $inputId = $_POST['inputId'];
    $inputPassword = $_POST['inputPassword'];

    echo "Input ID : {$inputId} <br/>";
    echo "Input PassWord : {$inputPassword} <br/>";

    if(!($inputId === "xim")) {
        echo "wrong input Id $inputId <br/>";
    } else {
        echo "correct input Id $inputId <br/>";
    }

    if(!($inputPassword === "1234")) {
        echo "wrong input PassWord {$inputPassword} <br/>";
    } else {
        echo "correct input PassWord {$inputPassword} <br/>";      
    }
?>