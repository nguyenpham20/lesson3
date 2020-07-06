<?php
class Rectangle {
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return ($this->width + $this->height) / 2;
    }

    public function display() {
        return "Dien tich hinh chu nhat la: " .$this->getArea()."<br/>"
             ."Chu vi hinh chu nhat la: ". $this->getPerimeter();

    }
}

$rectangle = new Rectangle(2,4);
echo $rectangle->display();

