<?php

class CircleAreaLibAdapter extends CircleAreaLib
{
    private $circle;

    public function __construct(Circle $circle)
    {
        $this->circle = $circle;
    }

    public function getCircleArea(int $diagonal): string
    {
        return "Adapter Circle: " . $this->circle->circleArea($diagonal);
    }
}