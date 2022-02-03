<?php
 
require_once "Service/require.php"; 
 
$sum = 50000;
$phone = 79000000001;
$context = new Context(new TypeWebMoney());
$context->doSomeBusinessLogic($phone, $sum);

echo "</br>";
$context->setStrategy(new TypeYandex);
$context->doSomeBusinessLogic($phone, $sum);