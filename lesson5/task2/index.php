<?php

require_once "Service/require.php";

function clientCodeSquare(SquareAreaLib $target, int $int)
{
    echo $target->getSquareArea($int) . "</br>";
};

function clientCodeCircle(CircleAreaLib $target, int $int)
{
    echo $target->getCircleArea($int) . "</br>";
};

$squareAreaLib = new SquareAreaLib();
clientCodeSquare($squareAreaLib, 6);
$square = new Square(); // расчёт площади по диагонали 6
echo "Area NotLib Square: ". $square->squareArea(6). "</br>";

$squareAreaLibAdapter = new SquareAreaLibAdapter($square);
clientCodeSquare($squareAreaLibAdapter, 6); // расчёт площади по длине окружности 6
echo "</br></br>";
$circleAreaLib = new CircleAreaLib();
clientCodeCircle($circleAreaLib, 6);
$circle = new Circle(); // расчёт площади по диагонали 6
echo "Area NotLib Circle: ". $circle->circleArea(6). "</br>";

$circleAreaLibAdapter = new CircleAreaLibAdapter($circle);
clientCodeCircle($circleAreaLibAdapter, 6); // расчёт площади по длине одной стороне 6

