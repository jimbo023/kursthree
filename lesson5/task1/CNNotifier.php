<?php

class ChromeNotifier extends Notifier
{
    public function send($message) 
    {
        echo "$message: Message send to CN </br>";
        parent::send($message);
    }
}