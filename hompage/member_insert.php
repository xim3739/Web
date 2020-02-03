<?php
    $inputId = $_POST['inputId'];
    $inputPassword = $_POST['inputPassword'];
    $inputName = $_POST['inputName'];
    $inputFirstEmail = $_POST['inputFirstEmail'];
    $inputSecondEmail = $_POST['inputSecondEmail'];
    $inputDate = $_POST['inputDate'];
    $inputGender = $_POST['gender'];

    $resultEmail = $inputFirstEmail."@".$inputSecondEmail;
    $registDay = date('Y-m-d (H:i)');

    $con = mysqli_connect("localhost", "root", "111111", "sample");
    $sql = "insert into mymembertbl(id, pass, name, email, date, gender, registDay, level, point)";
    $sql .= "values('$inputId', '$inputPassword', '$inputName', '$resultEmail', '$inputDate', '$inputGender', '$registDay', 9, 0)";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo " 
        <script>
            location.href = 'index.php';
        </script>
    ";
?>