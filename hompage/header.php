<?php
    session_start();
    if(isset($_SESSION['userId'])){
        $userid = $_SESSION['userId'];
    } else {
        $userid = "";
    }
    if(isset($_SESSION['userName'])) {
        $username = $_SESSION['userName'];
    } else {
        $username = "";
    } 
    if(isset($_SESSION['userLevel'])) {
        $userLevel = $_SESSION['userLevel'];
    } else {
        $userLevel = "";
    }
    if(isset($_SESSION['userPoint'])) {
        $userPoint = $_SESSION['userPoint'];
    } else {
        $userPoint = "";
    }
?>

<div id="top">
    <h3>
        <a href="index.php">XIM's</a>
    </h3>
    <ul id="top_menu">
    <?php
        if(!$userid) {
    ?>
        <li><a href="sign_in.php">회원 가입</a></li>
        <li> | </li>
        <li><a href="login_page.php">로그인</a></li>
    <?php 
        } else {
            $logged = $username."(".$userid.")님[Level:".$userLevel.", Point:".$userPoint."]";
    ?>
        <li><?=$logged?></li>
        <li> | </li>
        <li><a href="logout.php">로그아웃</a></li>
        <li> | </li>
        <li><a href="sign_in_modify.php">정보 수정</a></li>
    <?php
        }
    ?>
    <?php
        if($userLevel === 1) {
    ?>
        <li> | </li>
        <li><a href="admin.php">관리자 모드</a></li>
    <?php
        }
    ?>
    </ul>
</div>
<div id="menu_bar">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="message_form.php">MESSAGE</a></li>
            <li><a href="boar_form.php">BOARD</a></li>
            <li><a href="index.php">HOME</a></li>
        </ul>
</div>