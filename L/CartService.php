<?php


class CartService
{

    public function checkIfempty()
    {
        return $this->count > 0;
    }

}

class NewCartService extends CartService
{
    // здесь мы получается нарушаем Liskov Substitution Principle потому как меняем поведение выбрасывая ексепшен в ситуации
    // когда корзина пустая а должны вернут булевый результат
    public function checkIfempty()
    {
        if ($this->count > 0){
            return true;
        }
        else {
            throw new OMGException();
        }
    }

}