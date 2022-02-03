<?php

class Reader implements \SplObserver
{
    public $name;
    public $email;
    public $stazh;
 
    public function __construct(string $name, string $email, int $stazh){
        
        $this->name = $name;
        $this->email = $email;
        $this->stazh = $stazh;
    }

    public function update(\SplSubject $subject) : void
    {
        echo "Была добавлена новая вакансия. Нотификация отправлена на почту: ". $this->email. "</br>";

    }
}