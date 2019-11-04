<?php

// Плохо в этом интерфейсе то что здесь много методов, причем эти методы могут относится к разным сущностям такие как order, discount, cart,
// поэтому чтобы не было лишних методов в ненужных сущностях лучше разделить данные интерфейсы
interface Cart
{
    public function addProduct();
    public function deleteProduct();
    public function createOrder();
    public function applyDiscount();
    public function cancelDiscount();

}

// а если же нам где то понадобится все методы то мы можем заиплементить все интерфейсы сразу.

interface Cart2
{
    public function addProduct();
    public function deleteProduct();
}

interface Order
{
    public function createOrder();
}

interface Discount
{
    public function applyDiscount();
    public function cancelDiscount();
}