<?php

class TypeYandex implements Strategy
{
    public function setTypePayment(int $phone, int $sum) : void
    {
        echo "Выбрана оплата через Yandex: сумма заказа $sum, телефон $phone";
    }
}
 