<?php

class Context
{
    /**
     * @var Strategy
     */
 
    private $strategy;
 
 
    public function __construct(Strategy $strategy)
    {
 
        $this->strategy = $strategy;
    }
 
    public function setStrategy(Strategy $strategy)
    {
 
        $this->strategy = $strategy;
    }
 
    public function doSomeBusinessLogic(int $phone, int $sum) : void
    {
        $this->strategy->setTypePayment($phone, $sum);
 
    }
}