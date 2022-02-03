<?php

interface Strategy
{
    public function setTypePayment(int $phone, int $sum) : void;
}