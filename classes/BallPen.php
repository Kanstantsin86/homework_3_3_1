<?php
//namespace classes;

class BallPen extends Product //implements BallPenInterface
{
    public $bodyColor;
    public $size;
    public $withButton;
    public $inkColor;

    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity,
            $bodyColor, $size, $withButton, $inkColor)
    {
        parent::__construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity);
        $this->bodyColor = $bodyColor;
        $this->size = $size;
        $this->withButton = $withButton;
        $this->inkColor = $inkColor;
    }

    public function write ($inkColor)
    {
        if (is_null($inkColor) === true){
            echo 'В ручке нет чернил';
        } else {
            echo 'Ручка пишет цветом ' . $inkColor;
        }
    }
}

