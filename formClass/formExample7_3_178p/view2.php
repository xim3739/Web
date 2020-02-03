<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./formExample7_3.css">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_POST['id'];
        $password = $_POST['password'];
    ?>
    <ul>
        <li>아 &nbsp;이 &nbsp;디 : <?= $id?></li>
        <li>비밀번호 &nbsp;: <?= $password?></li>
    </ul>
</body>
</html>