<?php

interface Command
{
   public function execute() : void;
}
/**
* Некоторые команды способны выполнять простые операции самостоятельно.
*/
 
class setCommand implements Command
{
    public $receiver;
    public $start;
    public $end;
 
    public function __construct(Object $receiver, int $start, int $end)
    {
        $this->receiver = $receiver;
        $this->start = $start;
        $this->end = $end;
    }
    public function execute() : void
    {
       $this->receiver->setCommand($this->start, $this->end);
    }
}
 
class returnCommand implements Command
{
    public $receiver;
    public $start;
    public $end;
 
    public function __construct(Object $receiver, int $start = null, int $end = null)
    {
        $this->receiver = $receiver;
        $this->start = $start;
        $this->end = $end;
    }
    
    public function execute() : void
    {
       $this->receiver->returnCommand($this->start, $this->end);
    }
}
 
class Invoker
{
   /**
    * @var Command
    */
   private $onStart;
   /**
    * @var Command
    */
   private $onFinish;
   /**
    * Инициализация команд.
    */
   public function setStart(Command $command) : void
   {
       $this->onStart = $command;
   }
   public function setFinish(Command $command) : void
   {
       $this->onFinish = $command;
   }
   /**
    * Отправитель не зависит от классов конкретных команд и получателей.
    * Отправитель передаёт запрос получателю косвенно, выполняя команду.
    */
   public function onStart() : void
   {
       if ($this->onStart instanceof Command) {
           $this->onStart->execute();
       }
   }

   public function onFinish():void
   {
        
    if ($this->onFinish instanceof Command) {
        $this->onFinish->execute();
    }
   }
}
 
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
/**
* Клиентский код может параметризовать отправителя любыми командами.
*/
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
 
 
 
 
 
 
 
 
 

