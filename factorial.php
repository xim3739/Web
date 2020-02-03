<?php
    $result = 1;
    for($i = 1; $i <= 10; $i++) {
        $result = $result * $i;
        echo "$i! : $result"."<br/>";
    }

    $count = 0;
    for($num = 1; $num <= 500; $num++) {
        if($num%5 === 0) {
            echo "$num ";
            $count++;
        }
        if($count%10 === 0) {
                echo "<br/>";
        }
    }
    echo "============================<br/>";
    echo "제곱미터";
    echo "============================<br/>";
    for($i = 10; $i <= 200; $i = $i + 10) {
        $m = $i * 0.3025;
        echo "{$i} : $m <br/>";
    }

    $student = array("kim", "lee", "park");
    $score = array(array(80, 60, 70, 88, 89),
                    array(90, 70, 99, 80, 78),
                    array(70, 77, 67, 89, 10));

    for($i = 0; $i < count($student); $i++) {
        $sum = 0;
        for($j = 0; $j < count($score); $j++) {
            $sum = $sum + $score[$i][$j];
        }
        $avg = $sum / count($student);
        echo "{$student[$i]}의 합계 : $sum, 평균 : $avg<br/>";
    }

    
?>