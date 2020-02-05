<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
    <header>
        <?php include "header.php"?>
    </header>
    
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
            <h3>
                <?php
                    if(isset($_GET["page"])) {
                        $page = $_GET["page"];
                    } else {
                        $page = 1;
                    }

                    $mode = $_GET["mode"];

                    if($mode === "send") {
                        echo "발신 쪽지함 > 목록보기";
                    } else {
                        echo "수신 쪽지함 > 목록보기";
                    }
                ?>
            </h3>
            <div>
                <ul id="message">
                    <li>
                        <span class="col1">번호</span>
                        <span class="col2">제목</span>
                        <span class="col3">
                            <?php
                                if($mode === "send") {
                                    echo "받은이";
                                } else {
                                    echo "보낸이";
                                }
                            ?>
                        </span>
                        <span class="col4">등록일</span>
                    </li>
                    <?php
                        $con = mysqli_connect("localhost", "root", "111111", "sample");

                        if($mode === "send") {
                            $sql = "select * from message where send_id='$userid' order by num desc";
                        } else {
                            $sql = "select * from message where rv_id='$userid' order by num desc";
                        }
                        $result = mysqli_query($con, $sql);
                        $total_record = mysqli_num_rows($result);

                        $scale = 10;

                        if($total_record % $scale == 0) {
                            $total_page = floor($total_record / $scale);
                        } else {
                            $total_page = floor($total_record / $scale) + 1;
                        }

                        $start = ($page - 1) * $scale;

                        $number = $total_record - $start;

                        for($i = $start; $i < $start + $scale && $i < $total_record; $i++) {
                            mysqli_data_seek($result, $i);
                            $row = mysqli_fetch_array($result);
                            $num = $row["num"];
                            $subject = $row["subject"];
                            $regist_day = $row["regist_day"];

                            if($mode === "send") {
                                $msg_id = $row["rv_id"];
                            } else {
                                $msg_id = $row["send_id"];
                            }

                            $result2 = mysqli_query($con, "select name from mymembertbl where id='$msg_id'");
                            $record = mysqli_fetch_array($result2);
                            $msg_name = $record["name"];
                        ?>
                        <li>
                            <span class="col1"><?=$number?></span>
                            <span class="col2"><a href="message_view.php?mode=<?=$mode?>&num=<?=$num?>"><?=$subject?></a></span>
                            <span class="col3"><?=$msg_name?>(<?=$msg_id?>)</span>
                            <span class="col4"><?=$regist_day?></span>
                        </li>
                    <?php
                            $number--;
                            }
                        mysqli_close($con);
                    ?>
                </ul>
                <ul id="page_num">
                    <?php
                        if($total_page >= 2 && $page >= 2) {
                            $new_page = $page - 1;
                            echo("
                                <li><a href='message_box.php?mode=$mode&page=$new_page'>◀ 이전</a></li>
                            "); 
                        } else {
                            echo "<li>&nbsp;</li>";
                        }

                        for($i = 1; $i <= $total_page; $i++) {
                            if($page == $i) {
                                echo "<li><b> $i </b></li>";
                            } else {
                                echo "<li> <a href='message_box.php?mode=$mode&page=$i'> $i </a> <li>";
                            }
                        }
                        if($total_page >= 2 && $page != $total_page) {
                            $new_page = $page + 1;
                            echo "<li> <a href='message_box.php?mode=$mode&page=$new_page'>다음 ▶</a> </li>";
                        } else {
                            echo "<li>&nbsp;</li>";
                        }
                    ?>
                </ul>
                <ul class="buttons">
                    <li><button onclick="location.href='message_box.php?mode=rv'">수신 쪽지함</button></li>
                    <li><button onclick="location.href='message_box.php?mode=send'">발신 쪽지함</button></li>
                    <li><button onclick="location.href='message_form.php'">쪽지 쓰기</button></li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <?php include "footer.php"?>
    </footer>
</body>
</html>