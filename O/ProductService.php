<?php


class ProductService
{

    public function addProduct()
    {
        // достаем файл
        if ($file == 'xml') {
            //обработка
        }
        elseif ($file == 'xls') {
            //обработка
        }

        // в итоге если понадобится добавлять еще новые форматы например csv, мы будем вынуждены редактировать этот метод и можем чото сломать
    }

}

/*
 Теперь с помощью патерна билдер, может это не совсем билдер а тип фабрика я вот тут хз слоэжно их различать. В итоге что
у нас выйшло что если придется добавить новый формат мы не будем изменять уже существующий код, а дополним его.
И еще пеймент импорт рефачить нужно сука))
*/
class ProductService2
{
    protected $productAdd;


    public function __construct(ProductAdd $productAdd)
    {
        $this->productAdd = $productAdd;
    }

    public function addProduct()
    {
        $this->productAdd->add();
    }

}

class AddProductXML implements ProductAdd
{
    public function add()
    {
        // TODO: Implement add() method.
    }
}

class AddProductXLS implements ProductAdd
{
    public function add()
    {
        // TODO: Implement add() method.
    }
}


interface ProductAdd
{
    public function add();
}