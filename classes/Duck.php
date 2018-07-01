<?php
//namespace classes;

class Duck extends Product //implements DuckInterface
{
    public $age;
    public $name;
    public $size;
    public $color;
    public $voice;
    public $voiceCount;
    
    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity, 
        $age, $size, $color, $voice, $voiceCount)
    {
        parent::__construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity);
        $this->age = $age;
        $this->size = $size;
        $this->color = $color;
        $this->voice = $voice;
        $this->voiceCount = $voiceCount;
    }

    public function voice($voice, $voiceCount)
    {
        for ($i = 0; $i < $voiceCount; $i++) {
            echo $voice . "!!! ";
            
        }
    }
}

