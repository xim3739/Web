<html> <head>
<meta charset="utf-8">
<link href="./style.css" rel="stylesheet">
</head>
<body>
<?php
    $file_dir = "/Applications/mampstack-7.3.13-0/apache2/htdocs/formClass/fileUpload/";
    $file_path = $file_dir.$_FILES["upload"]["name"];
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path)) {
        $img_path = "./data/".$_FILES["upload"]["name"];
?>
    <ul>
        <li><img src="<?= $img_path?>"></li>
        <li><?= $_POST["comment"]?></li>
    </ul>
    <?php
        }
        else {
            echo "파일 업로드 오류가 발생했습니다!!!";
        }
    ?>
    </body>
    </html>