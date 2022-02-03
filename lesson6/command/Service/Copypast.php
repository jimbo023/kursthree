<?php

Class Copypast
{
    function setCommand(int $start, int $end): void
    {
        echo "Command: Скопировать символы с ".$start." по ".$end."</br>";
        echo "Logging: ". date(DATE_RFC822)."</br>";
    }
 
    function returnCommand()
    {
        echo "Отменить последнее копирование </br>";
        echo "Logging: ". date(DATE_RFC822)."</br>";
    }
}