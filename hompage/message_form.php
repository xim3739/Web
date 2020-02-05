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
            if(!document.message_form.rv_id.value) {
                alert("수신 아이디를 입력하세요!");
                document.message_form.rv_id.focus();
                return;
            }
            if(!document.message_form.subject.value) {
                alert("수신 아이디를 입력하세요!");
                document.message_form.subject.focus();
                return;
            }
            if(!document.message_form.content.value) {
                alert("수신 아이디를 입력하세요!");
                document.message_form.content.focus();
                return;
            }
            document.message_form.submit();
          }
    </script>
</head>
<body>
    <header><?php include "header.php"?></header>
    <?php
        if(!$userid) {
            echo ("
                <script>
                    alert('로그인 후 이용해주세요!');
                    history.go(-1);
                </script>
            ");
            exit;
        }
    ?>
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
            <h3 id="write_title">쪽지 보내기</h3>
            <ul class="top_buttons">
                <li><span><a href="message_box.php?mode=rv">수신 쪽지함</a></span></li>
                <li><span><a href="message_box.php?mode=send">발신 쪽지함</a></span></li>
            </ul>
            <form action="message_insert.php?send_id=<?=$userid?>" method="post" name="message_form">
                <div id="write_msg">
                    <ul>
                        <li>
                            <span class="col1">보내는 사람 : </span>
                            <span class="col2"><?=$userid?></span>
                        </li>
                        <li>
                            <span class="col1">수신 아이디 : </span>
                            <span class="col2"><input type="text" name="rv_id"></span>
                        </li>
                        <li>
                            <span class="col1">제목 : </span>
                            <span class="col2"><input type="text" name="subject"></span>
                        </li>
                        <li>
                            <span class="col1">제목 : </span>
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