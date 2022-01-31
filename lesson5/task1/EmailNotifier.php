<?php

class EmailNotifier extends Notifier
{
    public function send($message) 
    {
        echo "$message: Message send to Email </br>";
        parent::send($message);
    }
}