<?php

class Product
{

    protected $name;
    protected $price;
    protected $count;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count): void
    {
        $this->count = $count;
    }

    /* Вот здесь и нарушения принципа мы генерируем информацию о продаже за текущий день внутри класса product и если будет задача изменить что то внутри даного метода
    придется редактировать данный класс что не правильно
      */
    public function getTodaySalesReport()
    {
        // формируем информацию о продукте
    }

}

/* Правильно было бы вынести getTodaySalesReport в отдельный класс, тогда в случаи изменения будьто формата отчета либо данных которые должны быть внутри,
не придется изменять class Product */
class Reporter {

    public function getTodaySalesReport(Product $product)
    {
    }

}