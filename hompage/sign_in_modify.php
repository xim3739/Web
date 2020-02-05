<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/sign_in.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="./script/sign_in_modify.js"></script>
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
    <?php    
        $con = mysqli_connect("localhost", "root", "111111", "sample");
        $sql = "select * from mymembertbl where id='$userid'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        
        $pass = $row["pass"];   
        $name = $row["name"];

        $email = explode("@", $row["email"]);
        $email1 = $email[0];
        $email2 = $email[1];

        $date = $row["date"];
        $gender = $row["gender"];

        mysqli_close($con);

    ?>
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
        <form action="sign_in_update.php?id=<?=$userid?>" method="post" name="member_form">
            <h2>필수 항목</h2>
            <input type="text" id="inputId" value="<?=$userid?>" readonly>
            <p id="checkId"> </p>
            <br/>
            <table id="pass_table">
                <tr>
                    <td>
                        <input type="password" id="inputPassword" name="inputPassword" class="inputSet1" value="<?=$pass?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="inputPasswordCheck" class="inputSet1" value="<?=$pass?>">
                    </td>
                </tr>
            </table>
            <p id="checkPass"></p>
            <br/>
            <input type="text" placeholder="이름" id="inputName" name="inputName" class="inputSet1"
            value="<?=$name?>"/>
            <p id="checkName"></p>
            <br/>
            <div id="div_email">
                <input type="text" placeholder="이메일" id="inputFirstEmail" name="inputFirstEmail" class="inputSet2" value="<?=$email1?>"/> @ 
                <input type="text" placeholder="이메일 주소" id="inputSecondEmail" name="inputSecondEmail" class="inputSet2" value="<?=$email2?>"/>
            </div>
            <p id="checkEmail"></p>
            <br/>
            <h2>선택 항목</h2>
            <table id="table_choice_item">
                <tr>
                    <td>생년 월일</td>
                    <td>
                        <input type="date" id="inputDate" name="inputDate" value="<?=$date?>">
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