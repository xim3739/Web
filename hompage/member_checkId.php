<?php
    $id = $_POST["inputId"];

    $con = mysqli_connect("localhost", "root", "111111", "sample");
    $sql = "select * from mymembertbl where id='$id'";
    $result = mysqli_query($con, $sql);
    $record = mysqli_num_rows($result);

    if($record) {
        echo "1";
    } else {
        echo "0";
    }
    mysqli_close($con);
?>