<?php

class returnCommand implements Command
{
    public $receiver;
    public $start;
    public $end;
 
    public function __construct(Object $receiver, int $start = null, int $end = null)
    {
        $this->receiver = $receiver;
        $this->start = $start;
        $this->end = $end;
    }
    
    public function execute() : void
    {
       $this->receiver->returnCommand($this->start, $this->end);
    }
}