<?php
    $id = $_GET['id'];

    $pass = $_POST["inputPassword"];
    $name = $_POST["inputName"];

    $email1 = $_POST["inputFirstEmail"];
    $email2 = $_POST["inputSecondEmail"];
    $email = $email1."@".$email2;

    $date = $_POST["inputDate"];
    $gender = $_POST["gender"];

    $con = mysqli_connect("localhost", "root", "111111", "sample");
    $sql = "update mymembertbl set pass='$pass', name='$name', email='$email', date='$date', gender='$gender'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);

    session_start();
    unset($_SESSION["userId"]);
    unset($_SESSION["userName"]);
    unset($_SESSION["userLevel"]);
    unset($_SESSION["userPoint"]);

    echo "
        <script>
            location.href = 'index.php';
        </script>
    ";
?>