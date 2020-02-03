<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/sign_in.css">
    <script src="./script/sign_in.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/slidemain.css">
    <script src="./script/vendor/modernizr.custom.min.js"></script>
    <script src="./script/vendor/jquery-1.10.2.min.js"></script>
    <script src="./script/vendor/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="./script/slide.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
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
    <div id="div_sign_in" style="width: 700px;">
        <form action="member_insert.php" method="post" name="member_form">
            <h2>필수 항목</h2>
            <input type="text" placeholder="아이디" id="inputId" name="inputId" class="inputSet1"/>
            <p id="checkId"> </p>
            <br/>
            <table id="pass_table">
                <tr>
                    <td>
                        <input type="password" placeholder="비밀번호" id="inputPassword" name="inputPassword" class="inputSet1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="비밀번호 확인" id="inputPasswordCheck" class="inputSet1">
                    </td>
                </tr>
            </table>
            <p id="checkPass"></p>
            <br/>
            <input type="text" placeholder="이름" id="inputName" name="inputName" class="inputSet1"/>
            <p id="checkName"></p>
            <br/>
            <div id="div_email">
                <input type="text" placeholder="이메일" id="inputFirstEmail" name="inputFirstEmail" class="inputSet2"/> @ 
                <input type="text" placeholder="이메일 주소" id="inputSecondEmail" name="inputSecondEmail" class="inputSet2"/>
            </div>
            <p id="checkEmail"></p>
            <div id="div_sub_agree">
                <div id="div_sub_agree_content">
                    <input type="checkbox" id="checkBoxAge"> 만 14세 이상입니다. 
                    <br/>
                    <input type="checkbox" id="checkBoxUse"> 이용약관 동의
                    <button type="button">내용보기</button>
                    <br/>
                    <input type="checkbox" id="checkBoxInfo"> 개인정보 수집 및 이용 동의
                    <button type="button">내용보기</button>
                </div>
                
            </div>
            <br/>
            <table>
                <tr>
                    <th>구분</th>
                    <th>목적</th>
                    <th>항목</th>
                    <th>보유 및 이용기간</th>
                </tr>
                <tr>
                    <td>필수</td>
                    <td>이용자 식별, 서비스 이행을 위한 연락</td>
                    <td>이름, 아이디, 비밀번호, 이메일</td>
                    <td>회원 탈퇴 후 5일 까지</td>
                </tr>
            </table>
            <hr />
            <br/>
            <h2>선택 항목</h2>
            <table id="table_choice_item">
                <tr>
                    <td>생년 월일</td>
                    <td>
                        <input type="date" id="inputDate" name="inputDate">
                    </td>
                </tr>
                <tr>
                    <td>성별</td>
                    <td>
                        <label for="member">
                            <input type="radio" id="radioMember" name="gender" value="male"/>
                            <span>남자</span>
                        </label>
                        <label for="notmember">
                            <input type="radio" id="radioNotMember" name="gender" value="female"/>
                            <span>여자</span>
                        </label>
                    </td>
                </tr>
            </table>
            <br/>
            <br/>
            <div id="div_agree_table">
                <table id="agree_table">
                    <tr class="trClass">
                        <td rowspan="3" id="tdId"><input type="checkbox">전체동의</td>
                        <td><input type="checkbox" id="checkBoxBirth">
                            <span class="span_agree">생년월일과 성별 수집 및 이용 동의</span></td>
                    </tr>
                    <tr class="trClass">
                        <td><input type="checkbox" id="checkBoxEmail">
                            <span class="span_agree">이메일 마케팅 수신 동의</span></td>
                    </tr>
                    <tr class="trClass">
                        <td><input type="checkbox" id="checkBoxTerm">
                            <span class="span_agree">개인정보 유효기간 3년 지정(미동의 시 1년)</span></td>
                    </tr>
                </table>
            </div>
            <br/>
            <br/>
            <table style="margin-bottom: 50px;">
                <tr>
                    <th>구분</th>
                    <th>목적</th>
                    <th>항목</th>
                    <th>보유 및 이용기간</th>
                </tr>
                <tr>
                    <td>선택</td>
                    <td>맞춤 정보 제공, 마케팅</td>
                    <td>성별, 생년월일</td>
                    <td>회원 탈퇴 후 5일 까지</td>
                </tr>
            </table>
            <button type="button" id="bt_result">회원가입하기</button>
        </form>
    </div>
    <footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>