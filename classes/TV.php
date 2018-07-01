<?php
//namespace classes;

class TV extends Product
{
    public $model;
    public $yearOfIssue;
    public $screenType;
    public $isDigital;
    public $screenSize;
    public $numberOfColors;
    public $remoteControl;
    public $internetConnection;
    public $smartTv;
    public $numberOfChannels;
    
    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity, 
            $model, $yearOfIssue, $screenType, $isDigital, $screenSize, $numberOfColors, $remoteControl, 
            $internetConnection, $smartTv, $numberOfChannels)
    {
        parent::__construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity);
        $this->model = $model;
        $this->yearOfIssue = $yearOfIssue;
        $this->screenType = $screenType;
        $this->isDigital = $isDigital;
        $this->screenSize = $screenSize;
        $this->numberOfColors = $numberOfColors;
        $this->remoteControl = $remoteControl;
        $this->internetConnection = $internetConnection;
        $this->smartTv = $smartTv;
        $this->numberOfChannels = $numberOfChannels;
    }
}

