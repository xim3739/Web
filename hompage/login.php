<?php
    $inputId = $_POST['inputId'];
    $inputPassword = $_POST['inputPassword'];

    $con = mysqli_connect("localhost", "root", "111111", "sample");
    $sql = "select * from mymembertbl where id='{$inputId}'";
    $result = mysqli_query($con, $sql);

    $num_match = mysqli_num_rows($result);

    if(!$num_match) {
        echo("
            <script>
                window.alert('NOT ACCEPT ID')
                history.go(-1)
            </script>    
        ");
    } else {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"];

        mysqli_close($con);

        if($inputPassword != $db_pass) {
            echo("
                <script>
                    window.alert('WRONG INPUT PASSWORD')
                    history.go(-1)
                </script>
            ");
            exit;
        } else {
            session_start();
            $_SESSION['userId'] = $row['id'];
            $_SESSION['userName'] = $row['name'];
            $_SESSION['userLevel'] = $row['level'];
            $_SESSION['userPoint'] = $row['point'];

            echo("
                <script>
                    location.href = 'index.php';
                </script>
            ");
        }
    }
?>