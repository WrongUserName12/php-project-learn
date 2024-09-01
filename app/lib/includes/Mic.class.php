<?php


class Mic
{
    public $model;
    public $brand;
    public $color;
    private $light;
    public $price;
    public $usb_port;

    public function __construct($brand){
        print("Construction\n");
        $this->brand = $brand;
        print("The brand is".$this->brand."\n");
    }

    public function setlight($light){
        $this->light=$light;
    }
    public function getlight(){
        return $this->light;
    }
    public function getmodel(){
        return $this->model;
    }
    public function setmodel($model){
        $this->model = ucwords($model);
    }

}