<?php

class Square implements ISquare
{
    public function squareArea(int $sideSquare)
    {
        $area = $sideSquare * $sideSquare;
        return "$area";
    }
}