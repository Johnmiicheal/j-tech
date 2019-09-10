<?php
class Phones{

private $image;
private $brand;
private $name;
private $price;

public function __construct($image, $brand, $name, $price){
    $this->image=$image;
    $this->brand=$brand;
    $this->name=$name;
    $this->price=$price;
}

public function getImage(){
    return $this->image;
}

public function getBrand(){
    return $this->brand;

}

public function getName(){
    return $this->name;
}

public function getPrice(){
    return $this->price;
}

}





?>