<?php
//namespace classes;

class Car extends Product implements CarInterface
{
    public $model;
    public $yearOfIssue;
    public $enginePower;
    public $engineType;
    public $bodyType;
    public $color;

    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity, 
            $model, $yearOfIssue, $enginePower, $engineType, $bodyType, $color) 
    {
        parent::__construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity);
        $this->model = $model;
        $this->yearOfIssue = $yearOfIssue;
        $this->enginePower = $enginePower;
        $this->engineType = $engineType;
        $this->bodyType = $bodyType;
        $this->color = $color;
    }
    
      
    public function checkTheEnvironmentalFriendliness ($engineType)
    {
        if ($engineType === 'electric') {
            echo 'This car is eco-friendly';
        } else {
            echo 'This car is not eco-friendly';
        }
    }
}
