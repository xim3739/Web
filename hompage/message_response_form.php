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
    <script>
        function check_input() {
            if (!document.message_form.subject.value){
                alert("제목을 입력하세요!");
                document.message_form.subject.focus();
                return;
            }
            if (!document.message_form.content.value){
                alert("내용을 입력하세요!");    
                document.message_form.content.focus();
                return;
            }
            
            document.message_form.submit();
        }
    </script>
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
            <h3 id="write_title">답변 쪽지 보내기</h3>

            <?php
                $num = $_GET["num"];

                $con = mysqli_connect("localhost", "root", "111111", "sample");
                $sql = "select * from message where num=$num";
                $result = mysqli_query($con, $sql);

                $row = mysqli_fetch_array($result);
                $send_id = $row['send_id'];
                $rv_id = $row['rv_id'];
                $subject = $row['subject'];
                $content = $row['content'];

                $subject = "RE : ".$subject;

                $content = "> ".$content;
                $content = str_replace("\n", "\n>", $content);
                $content = "\n\n\n-----------------------------------------------\n".$content;

                $result2 = mysqli_query($con, "select name from members where id='$send_id'");
                $record = mysqli_fetch_array($result2);
                $send_name = $record["name"];
            ?>
            <form name="message_form" action="message_insert.php?send_id=<?=$userid?>" method="post">
                <input type="hidden" name="rv_id" value="<?=$send_id?>">
                <div id="write_msg">
                    <ul>
                        <li>
                            <span class="col1">보내는 사람 : </span>
                            <span class="col2"><?=$userid?></span>
                        </li>
                        <li>
                            <span class="col1">수신 아이디 : </span>
                            <span class="col2"><?=$send_name?>(<?=$send_id?>)</span>
                        </li>
                        <li>
                            <span class="col1">제목 : </span>
                            <span class="col2"><input type="text" name="subject" value="<?=$subject?>"></span>
                        </li>
                        <li id="text_area">
                            <span class="col1">글 내용 : </span>
                            <span class="col2"><textarea name="content"></textarea></span>
                        </li>
                    </ul>
                    <button type="button" onclick="check_input()">보내기</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <?php include "footer.php"?>
    </footer>
</body>
</html>