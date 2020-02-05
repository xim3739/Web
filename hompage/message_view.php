<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/slidemain.css">
    <script src="./script/vendor/modernizr.custom.min.js"></script>
    <script src="./script/vendor/jquery-1.10.2.min.js"></script>
    <script src="./script/vendor/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="./script/slide.js"></script>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/message.css">
    <title>Document</title>
</head>
<body>
    <header><?php include "header.php"?></header>
    <section>
        <div class="slideshow" id="main_img_bar">
            <div class="slideshow_sliders">
                <a href=""> <img src="./img/slide-1.jpeg" alt="slide1"> </a>
                <a href=""> <img src="./img/slide-2.jpeg" alt="slide2"> </a>
                <a href=""> <img src="./img/slide-3.jpeg" alt="slide3"> </a>
                <a href=""> <img src="./img/slide-4.jpeg" alt="slide4"> </a>
            </div>
            <div class="slideshow_nav">
                <a href="" class="prev">prev</a>
                <a href="" class="next">next</a>
            </div>
            <div class="slideshow_indicator">
                <a href="">&nbsp;</a>
                <a href="">&nbsp;</a>
                <a href="">&nbsp;</a>
                <a href="">&nbsp;</a>
            </div>
        </div>
        <div id="message_box">
            <h3 class="title">
                <?php
                    $mode = $_GET["mode"];
                    $num = $_GET["num"];
                    
                    $con = mysqli_connect("localhost", "root", "111111", "sample");
                    $sql = "select * from message where num=$num";
                    $result = mysqli_query($con, $sql);
                    
                    $row = mysqli_fetch_array($result);
                    $send_id = $row["send_id"];
                    $rv_id = $row["rv_id"];
                    $subject = $row["subject"];
                    $content = $row["content"];
                    $regist_day = $row["regist_day"];
                    
                    $content = str_replace(" ", "&nbsp;", $content);
                    $content = str_replace("\n", "<br>", $content);
        
                    if($mode === "send") {
                        $result2 = mysqli_query($con, "select name from mymembertbl where id='$rv_id'");
                    } else {
                        $result2 = mysqli_query($con, "select name from mymembertbl where id='$send_id'");
                    }

                    $record = mysqli_fetch_array($result2);
                    $msg_name = $record["name"];
                
                    if($mode === "send") {
                        echo "발신 쪽지함 > 내용보기";
                    } else {
                        echo "발신 쪽지함 > 내용보기";
                    }
                ?>
            </h3>
            <ul id="view_content">
                <li>
                    <span class="col1"><b>제목 : </b> <?=$subject?></span>
                    <span class="col2"><?=$msg_name?> | <?=$regist_day?></span>
                </li>
                <li>
                    <?=$content?>
                </li>
            </ul>
            <ul class="buttons">
                <li><button onclick="location.href='message_box.php?mode=rv'">수신 쪽지함</button></li>
                <li><button onclick="location.href='message_box.php?mode=send'">발신 쪽지함</button></li>
                <li><button onclick="location.href='message_response_form.php?num=<?=$num?>'">답변 쪽지</button></li>
                <li><button onclick="location.href='message_delete.php?num=<?=$num?>&mode=<?=$mode?>'">삭제</button></li>
            </ul>
        </div>
    </section>
    <footer>
        <?php include "footer.php"?>
    </footer>
</body>
</html>