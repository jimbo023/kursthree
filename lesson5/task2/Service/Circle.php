<?php

class Circle implements ICircle
{
    public function circleArea(int $circumference)
    {
        $pi = 3.14;
        $area = ($circumference * $circumference) / (4 * $pi);
        return "$area";
    }
}