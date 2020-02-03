<?php
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    if($email === "agree") {
        $resultEmail = "agree";
    } else {
        $resultEmail = "disagree";
    }
    echo "Gender : {$gender} <br/>";
    echo "Email : {$resultEmail}";
?>