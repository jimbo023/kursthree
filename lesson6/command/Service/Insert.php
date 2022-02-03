<?php

Class Insert
{
    function setCommand(int $start, int $end): void
    {
        echo "Command: Вставить символы с ".$start." по ".$end."</br>";
        echo "Logging: ". date(DATE_RFC822)."</br>";
    }
 
    function returnCommand()
    {
        echo "Отменить последнюю вставку </br>";
        echo "Logging: ". date(DATE_RFC822)."</br>";
    }
}