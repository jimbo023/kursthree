<?php

class TypeQiwi implements Strategy
{
    public function setTypePayment(int $phone, int $sum) : void
    {
      echo "Выбрана оплата через Qiwi: сумма заказа $sum, телефон $phone";
    }
}