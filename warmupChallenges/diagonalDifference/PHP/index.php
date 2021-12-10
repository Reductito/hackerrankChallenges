<?php
function diagonalDifference($arr, $n) {
    $sum1 = 0;
    $sum2 = 0;
    $t = $n - 1;
    for($i=0;$i<$n;$i++) {
        $sum1 += $arr[$i][$i];
    }
    for($i=0;$i<$n;$i++) {
        $sum2 += $arr[$i][$t];
        $t--;
    }
    return abs($sum1 - $sum2);
}