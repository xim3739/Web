<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/login_page.css">
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/slidemain.css">
    <script src="./script/vendor/modernizr.custom.min.js"></script>
    <script src="./script/vendor/jquery-1.10.2.min.js"></script>
    <script src="./script/vendor/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="./script/slide.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <?php include "header.php";?>
    </header>
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
    <div id="div_login" style="width: 350px;">
        <form action="login.php" style="width: 350px;" name="loginForm" method="post">
            <div id="div_radio">
                <label for="member">
                    <input type="radio" id="radioMember" name="gender" value="member"/>
                    <span>회원</span>
                </label>
                <label for="notmember">
                    <input type="radio" id="radioNotMember" name="gender" value="notmember"/>
                    <span>비회원</span>
                </label>
            </div>
            <div id="div_input_info">
                <div style="display : inline-block; width: 300px;">
                    <label for="inputId" class="inputTextClass">아이디
                        <input type="text" id="inputId" name="inputId">
                    </label>
                    <br/>
                    <label for="inputPass" class="inputTextClass">비밀번호
                        <input type="password" id="inputPassword" name="inputPassword"/>
                    </label>
                </div>
                <input type="submit" id="buttonLogin" value="LOGIN">LOGIN</input>
            </div>
            <div id="div_login_check_info">
                <label for="member">
                    <input type="checkbox" id="checkBoxIdSave" name="idSave" value="idSave"/>
                    <span>아이디 저장</span>
                </label>
                <label for="notmember">
                    <input type="checkbox" id="checkBoxSecurity" name="security" value="security"/>
                    <span>키보드 보안접속</span>
                </label>
            </div>
            <div id="div_login_bottom">
                <button type="button" class="login_bottom_button" onclick="location.open('./sign_in.php');">
                    <span>회원가입</span>
                </button>
                <button type="button" class="login_bottom_button">
                    <span>아이디 찾기</span>
                </button>
                <button type="button" class="login_bottom_button">
                    <span>비밀번호 찾기</span>
                </button>
            </div>
        </form>
    </div>
    <footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>