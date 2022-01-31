<?php

require_once('require.php');
 

$notifier = new Notifier();
$notifier = new SMSNotifier($notifier);
$notifier = new ChromeNotifier($notifier);
$notifier = new EmailNotifier($notifier);
 
$notifier->send('ALERT');