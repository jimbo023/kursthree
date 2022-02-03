<?php

require_once "Service/require.php";

$subject = new Subject();
 
$client1 = new Reader('Stephan', 'test@ya.com', 33);
$client2 = new Reader('John', 'test@mail.ru', 22);
$client3 = new Reader('Nicolas', 'mamamia@mail.com', 21);

$subject->attach($client1);
$subject->attach($client2);
$subject->someBusinessLogic();
$subject->attach($client3);
$subject->detach($client2);
$subject->someBusinessLogic();

