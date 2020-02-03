<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/slidemain.css">
    <script src="./script/vendor/modernizr.custom.min.js"></script>
    <script src="./script/vendor/jquery-1.10.2.min.js"></script>
    <script src="./script/vendor/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="./script/slide.js"></script>
</head>
<body>
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
<div id="main_content">
    <div id="latest">
        <h4>최근 게시글</h4>
        <ul>
        <?php
            $con = mysqli_connect("localhost", "root", "111111", "sample");
            $sql = "select * from board order by num desc limit 5";
            $result = mysqli_query($con, $sql);

            if(!$result) {
                echo "Empty Board";
            } else {
                while($row = mysqli_fetch_array($result)) {
                    $registDay = substr($row["registDay"], 0, 10);
        ?>
            <li>
                <span><?=$row['subject']?></span>
                <span><?=$row['name']?></span>
                <span><?=$registDay?></span>
            </li>
        <?php    
                }
            }
        ?>
        </ul>
    </div>
    <div id="point_rank">
        <h4>포인트 랭킹</h4>
        <ul>
        <?php
            $rank = 1;
            $sql = "select * from mymembertbl order by point desc limit 5";
            $result = mysqli_query($con, $sql);

            if(!$result) {
                echo "Empty Members";
            } else {
                while($row = mysqli_fetch_array($result)) {
                    $name = $row['name'];
                    $id = $row['id'];
                    $point = $row['point'];
                    $name = mb_substr($name, 0, 1)." * ".mb_substr($name, 2, 1);
        ?>
            <li>
                <span><?=$rank?></span>
                <span><?=$name?></span>
                <span><?=$id?></span>
                <span><?=$point?></span>
            </li>
        <?php
            $rank++;
                }
            }
            mysqli_close($con);
        ?>
        </ul>
    </div>
</div>
</body>
</html>
