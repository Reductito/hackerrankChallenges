<?php
function compareTriplets($a, $b) {
    $aScore = 0;
    $bScore = 0;
    foreach($a as $aKey => $aValue) {
        foreach ($b as $bKey => $bValue) {
            if($aKey === $bKey) {
                if($aValue > $bValue) {
                    $aScore += 1;
                } elseif ($aValue < $bValue) {
                    $bScore += 1;
                }
            }
        }
    }
    return [$aScore, $bScore];
}