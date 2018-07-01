<?php
//namespace classes;

abstract class Product//объявляем абстрактный класс Товар
{
    public $category;//категория
    public $name;//название
    public $validity;//срок годности
    public $tax;//налог
    public $discount;//скидка
    public $price;//цена
    public $basketQuantity;//количество единиц в корзине

    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity)
    {
        $this->category = $category;
        $this->name = $name;
        $this->validity = $validity;
        $this->tax = $tax;
        $this->discount = $discount;
        $this->price = $price;
        $this->basketQuantity = $basketQuantity;
    }
}

