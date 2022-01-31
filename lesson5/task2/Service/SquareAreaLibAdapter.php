<?php

class SquareAreaLibAdapter extends SquareAreaLib
{
    private $square;

    public function __construct(Square $square)
    {
        $this->square = $square;
    }

    public function getSquareArea(int $diagonal): string
    {
        return "Adapter Square: " . $this->square->squareArea($diagonal);
    }
}