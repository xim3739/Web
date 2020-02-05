<meta charset='utf-8'>
<?php
    $send_id = $_GET["send_id"];

    $rv_id = $_POST['rv_id'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $regist_day = date('Y-m-d (H:i)');
    echo "post val";
    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);

    if(!$send_id) {
        echo ("
            <script>    
                alert('로그인 후 이용해 주세요!');
                history.go(-1);
            </script>
        ");
        exit;
    }
    echo "session id";
    $con = mysqli_connect("localhost", "root", "111111", "sample");
    $sql = "select * from mymembertbl where id='$rv_id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);
    echo "database";
    if($num_record) {
        $sql = "insert into message (send_id, rv_id, subject, content, regist_day) ";
        $sql .= "values('$send_id', '$rv_id', '$subject', '$content', '$regist_day')";
        mysqli_query($con, $sql);
    } else {
        echo ("
            <script>
                alert('수신 아이디가 잘못 되었습니다.');
                history.go(-1);
            </script>
            ");
        exit;
    }
    mysqli_close($con);

    echo "
        <script>
            location.href = 'message_box.php?mode=send';
        </script>
    ";
    
?>