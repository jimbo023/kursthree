<?php

require_once "Service/require.php";

$start = 5;
$end = 9;

$invoker = new Invoker();

$copypast = new Copypast();
$insert = new Insert();
$cut = new Cut();

$invoker->setStart(new setCommand($copypast, $start, $end));
$invoker->onStart();
 
$invoker->setFinish(new returnCommand($copypast));
$invoker->onFinish();
 
$invoker->setStart(new setCommand($insert, $start, $end));
$invoker->onStart();
 
$invoker->setFinish(new returnCommand($insert));
$invoker->onFinish();

$invoker->setStart(new setCommand($cut, $start, $end));
$invoker->onStart();

$invoker->setFinish(new returnCommand($cut));
$invoker->onFinish();
 
 
 
 
 
 
 
 
 

