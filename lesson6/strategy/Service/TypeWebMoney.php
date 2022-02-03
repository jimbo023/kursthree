<?php

class TypeWebMoney implements Strategy
{
    public function setTypePayment(int $phone, int $sum) : void
    {
        echo "Выбрана оплата через WebMoney: сумма заказа $sum, телефон $phone";
    }
}