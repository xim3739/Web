<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/member.css">
    <title>XIM's</title>
    <script>
        function checkInput() {
            if(!document.member_form.id.value) {
                alert("Input Id Please");
                document.member_form.id.focus();
                return;
            }
            if(!document.member_form.pass.value) {
                alert("Input PassWord Please");
                document.member_form.pass.focus();
                return;
            }
            if(!document.member_form.passConfirm.value) {
                alert("Input PassWord Please");
                document.member_form.passConfirm.focus();
                return;
            }
            if(!document.member_form.name.value) {
                alert("Input Id Please");
                document.member_form.name.focus();
                return;
            }
            if(!document.member_form.email1.value) {
                alert("Input Id Please");
                document.member_form.email1.focus();
                return;
            }
            if(!document.member_form.email2.value) {
                alert("Input Id Please");
                document.member_form.email2.focus();
                return;
            }
            if(document.member_form.pass.value !=== document.member_form.passConfirm.value) {
                alert("Not Match PassWord");
                document.member_form.pass.focus();
                document.member_form.pass.select();
                return;
            }
            document.member_form.submit();
        }
    </script>
</head>
<body>
    <header>
        <?php include "header.php";?>
    </header>
    <section>
        <div id="main_img_bar">
            <img src="./img/main_img.png">
        </div>
        <div id="main_content">
            <div id="join_box">
            <form action="member_form" method="post" action="member_insert.php">
                <h2>회원가입</h2>
                <div class="col1">아이디</div>
                <div class="col2"><input type="text" name="id"></div>  
                <div class="col3"><a href="#"><img src="./img/check_id.gif" onclick="checkId()"></a></div>
                <div class="clear"></div>
                <div class="form">
                    <div class="col1">비밀번호</div>
                    <div class="col2"><input type="password" name="pass"></div>
                </div>
                <div class="clear"></div>
                <div class="form">
                    <div class="col1">비밀번호 확인</div>
                    <div class="col2"><input type="password" name="passConfirm"></div>
                </div>
                <div class="clear"></div>
                <div class="form email">
                    <div class="col1">이메일</div>
                    <div class="col2"><input type="text" name="email1">@<input type="text" name="email2"></div>
                </div>
                <div class="clear"></div>
                <div class="bottom_line"></div>
                <div class="bottons">
                    <img src="./img/button_save.gif" style="cursor:pointer" onclick="checkInput()">&nbsp;
                    <img src="./img/button_reset.gif" style="cursor:pointer" id="reset_button" onclick="resetForm()">
                </div>
            </form>
            </div>
        </div>
    </section>
    <footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>