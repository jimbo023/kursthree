<?php

class SMSNotifier extends Notifier
{
    public function send($message)
    {
        echo "$message: Message send to SMS </br>";
        parent::send($message);
    }
}