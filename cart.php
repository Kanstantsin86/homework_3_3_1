<?php

require_once 'index.php';
$products = [$HondaCivic, $TeslaModelS, $beryozka215, $samsungUE55MU7000U, $parkerPen, $erichKrausePen, $billy, $willy];
$cartProducts = [];
$subtotal = [];
$sum;

class Cart {//объявляем класс Корзина
    
    public function addProduct($products){//добавляем в корзину товары, basketQuantity которых > 0
        foreach ($products as $product){
        if($product->basketQuantity > 0){
            $cartProducts[] = $product;
        } 
    }
    
    function sumCalc($cartProducts){//считаем общую сумму заказа
        foreach ($cartProducts as $product){
            $subtotal = $product->price*$product->basketQuantity;
        }
        $sum = array_sum($subtotal);
    }

    //Опишите класс Корзина, в который можно передавать любой товар.
    //Опишите у корзины нужные свойства и методы. Например, метод получения суммы заказа, удаление товара из корзины и т.д.
    }
}
class Order
{
    function printSum($sum)
    {
        echo 'Стоимость вашего заказа: ' . $sum;
    }
}
