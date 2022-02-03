<?php

class Subject implements \SplSubject
{
    /**
     * @var int Для удобства в этой переменной хранится состояние Издателя,
     * необходимое всем подписчикам.
     */
    public $state;
 
    /**
     * @var \SplObjectStorage Список подписчиков. В реальной жизни список
     * подписчиков может храниться в более подробном виде (классифицируется по
     * типу события и т.д.)
     */
    private $observers = array();
 
    public function __construct()
    {
        $this->observers = [];
    }
 
    /**
     * Методы управления подпиской.
     */
    public function attach(\SplObserver $observer) : void
    {
        echo "Встал на биржу ".$observer->name.". Контакт: ". $observer->email. ". Стаж: ". $observer->stazh. "</br>";
        $this->notify();
        $this->observers[] = $observer;
        
        // if($observer->name){
        //     $this->notify();
        // }
  
    }
 
    public function detach(\SplObserver $observer) : void
    {
        $key = array_search($observer,$this->observers, true);
        if(false !== $key){
            unset($this->observers[$key]);
        };
        echo "Ушёл с биржи ".$observer->name.". Контакт: ". $observer->email. ". Стаж: ". $observer->stazh. "</br>";
        
    }
 
    /**
     * Запуск обновления в каждом подписчике.
     */
    public function notify() : void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
 
    /**
     * Обычно логика подписки – только часть того, что делает Издатель. Издатели
     * часто содержат некоторую важную бизнес-логику, которая запускает метод
     * уведомления всякий раз, когда должно произойти что-то важное (или после
     * этого).
     */
    public function someBusinessLogic() : void
    {
    }
}