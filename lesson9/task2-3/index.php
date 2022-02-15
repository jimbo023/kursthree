<?php

use SebastianBergmann\CodeCoverage\Report\PHP;

$arr = [];

for ($i = 1; $i < 500; $i++) {
    $arr[] = random_int(1, 500);
}

function bubbleSort($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $count = count($array);
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    return $array;
}

$arr = bubbleSort($arr);

function LinearSearch($myArray, $num)
{
    $count = count($myArray);
    $step = 0;
    $match = 0;
    for ($i = 0; $i < $count; $i++) {
        $step++;
        if ($myArray[$i] == $num){
            unset($myArray[$i]);
            $match++;
        }
        elseif ($myArray[$i] > $num) {
            echo "$step - кол-во шагов для поиска. </br>";
            echo "$match - кол-во совпадений по результату поиска. </br>";
            return $myArray;
        }
    }
    return $myArray;
}
$delete_int = 7;
$start_time = microtime(true);
$arr = LinearSearch($arr, $delete_int);
$end_time = microtime(true);

$result_time = $end_time - $start_time;
echo "Поиск занял: $result_time </br>";
