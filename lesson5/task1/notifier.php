<?php

class Notifier
{
    protected $notifier;
 
    public function __construct(Notifier $nextNotifier = null)
    {
 
        $this->notifier = $nextNotifier;
    }
 
    public function send($message)
    {
        if ($this->notifier){
            $this->notifier->send($message);
        }
    }
}