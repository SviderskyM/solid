<?php


class Order
{
    public function createOrder($id)
    {
        // здесь мы зависим от cartRepository а должны зависеть от абстракций а не деталей... переделываем
        $cartrepository = new CartRepository();
        $cartrepository->getProductsInCart($id);
        // чо то там дальше
    }

}

interface RepositoryForCart
{
    public function getProductsInCart($id);
}

class CartRepository implements RepositoryForCart
{

    public function getProductsInCart($id)
    {
        // TODO: Implement getProductsInCart() method.
    }
}

class Order2
{
    protected $repositoryForCart;

    // теперь мы зависим не от CartRepository а от его абстракции в виде RepositoryForCart
    public function __construct(RepositoryForCart $repositoryForCart)
    {
        $this->repositoryForCart = $repositoryForCart;
    }

    public function createOrder($id)
    {
        $this->repositoryForCart->getProductsInCart($id);
    }

}