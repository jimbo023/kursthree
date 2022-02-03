<?php

class setCommand implements Command
{
    public $receiver;
    public $start;
    public $end;
 
    public function __construct(Object $receiver, int $start, int $end)
    {
        $this->receiver = $receiver;
        $this->start = $start;
        $this->end = $end;
    }
    public function execute() : void
    {
       $this->receiver->setCommand($this->start, $this->end);
    }
}