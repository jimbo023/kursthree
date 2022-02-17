<?php

require_once "Service/require.php"; 

// задаем исходное математическое выражение
$str = "(2+2)*2";

$parse = new Main();

// строительство дерева классов
$parse->builder($str);

// echo '<pre>';
// echo print_r($parse->arNode);
// echo '</pre>';


echo $str." = ".$parse->calc();



?>
