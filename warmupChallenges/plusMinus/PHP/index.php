<?php
function plusMinus(array $arr) {
    $posScore = 0;
    $zeroScore = 0;
    $negScore = 0;
    foreach($arr as $arrEntry) {
        if($arrEntry > 0) {
            $posScore++;
        } elseif($arrEntry < 0) {
            $negScore++;
        } elseif($arrEntry === 0) {
            $zeroScore++;
        }
    }
    function calcRatio(int $score, array $arr): float {
        $count = count($arr);
        $ratio = $score / $count;
        return number_format($ratio, 6);
    }
    $posRatio = calcRatio($posScore, $arr);
    $zeroRatio = calcRatio($zeroScore, $arr);
    $negRatio = calcRatio($negScore, $arr);
    echo $posRatio;
    echo "\n";
    echo $negRatio;
    echo "\n";
    echo $zeroRatio;
}