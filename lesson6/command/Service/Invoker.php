<?php

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

   public function setStart(Command $command) : void
   {
       $this->onStart = $command;
   }
   public function setFinish(Command $command) : void
   {
       $this->onFinish = $command;
   }
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