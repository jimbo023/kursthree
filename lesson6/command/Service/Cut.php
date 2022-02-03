<?php

Class Cut
{
    function setCommand(int $start, int $end): void
    {
        echo "Command: Вырезать символы с ".$start." по ".$end."</br>";
        echo "Logging: ". date(DATE_RFC822)."</br>";
    }
 
    function returnCommand()
    {
        echo "Отменить вырезание </br>";
        echo "Logging: ". date(DATE_RFC822)."</br>";
    }
}