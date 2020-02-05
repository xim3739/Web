<meta charset='utf-8'>

<?php
    $num = $_GET["num"];
    $mode = $_GET["mode"];

    $con = mysqli_connect("localhost", "root", "111111", "sample"); 
    $sql = "delete from message where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);

    if($mode === "send") {
        $url = "message_box.php?mode=send";
    } else {
        $url = "message_box.php?mode=rv";
    }

    echo (" 
            <script>
                location.href = '$url';
            </script>
        ");
?>