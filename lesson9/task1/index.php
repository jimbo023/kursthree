<?php

// Сортировка пузырьком
$arr = [];

for ($i = 1; $i < 10000; $i++) {
    $arr[] = random_int(1, 10000);
}
$start_time = microtime(true);

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

$end_time = microtime(true);

$result_time = $end_time - $start_time;
echo "Сортировка пузырьком: $result_time </br>";

// Шейкерная сортировка

$arr = [];

for ($i = 1; $i < 10000; $i++) {
    $arr[] = random_int(1, 10000);
}
$start_time = microtime(true);

function shakerSort($array)
{
    $n = count($array);
    $left = 0;
    $right = $n - 1;
    do {
        for ($i = $left; $i < $right; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = array($array[$i + 1], $array[$i]);
            }
        }
        $right -= 1;
        for ($i = $right; $i > $left; $i--) {
            if ($array[$i] < $array[$i - 1]) {
                list($array[$i], $array[$i - 1]) = array($array[$i - 1], $array[$i]);
            }
        }
        $left += 1;
    } while ($left <= $right);
    return $array;
}

$arr = shakerSort($arr);

$end_time = microtime(true);

$result_time = $end_time - $start_time;
echo "Шейкерная сортировка: $result_time </br>";

