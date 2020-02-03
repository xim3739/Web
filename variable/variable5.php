<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 100;
        echo gettype($a);
        settype($a, 'double');
        echo "<br/>";
        echo gettype($a);
    ?>
</body>
</html>