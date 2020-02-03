<?php
    echo "<table border = 1>";
    echo "<tr align = center>";
    for($i = 2; $i <= 9; $i++) {
        echo "<th width=100> $i 단</th>";
    }
    echo "</tr>";
    for($i = 0; $i <= 9; $i++) {
        for($j = 0; $j <= 9; $j++) {
            $result[$i][$j] = ($i + 2) * ($j + 1);
        }
    }
    for($i = 0; $i <= 8; $i++) {
        echo "<tr align = center>";
        for($j = 0; $j <= 7; $j++) {
            $a = $j + 2;
            $b = $i + 1;
            $c = $result[$j][$i];
            echo "<td> $a X $b = $c </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>