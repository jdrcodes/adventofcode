<?php

include('utils.php');

$data = getFileFromData('1.txt');

$sumData = [];

$maxValue = 0;
foreach ($data as $elfData) {
    $sum = 0;
    foreach ($elfData as $calorie) {
        $sum += $calorie;
    }
    $sumData[] = $sum;

    if ($sum > $maxValue) {
        $maxValue = $sum;
    }
}

echo $maxValue;

rsort($sumData);

$totalCalories = 0;
for ($i = 0; $i < 3; $i++)
{
    $totalCalories += $sumData[$i];
}

echo $totalCalories;