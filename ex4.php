<?php
abstract class Figure
    {
    abstract public function getArea();
    abstract public function getPerimeter();
    }
    
class Square extends Figure
{
    private $side;
    public function getArea()
    {
        return $this->side ** 2;
    }

    public function getPerimeter()
    {
        return $this->side * 4;
    }
    
    public function __construct($side)
    {
        $this->side = $side;
    }    
}

class Rectangle extends Figure
{
    private $height;
    private $width;
    
    public function getArea()
    {
        return $this->height * $this->width;
    }

    public function getPerimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    public function __construct($width, $height)
    {
        $this->$height = $height;
        $this->$width = $width;
    }
}

class Triangle extends Figure{
    private $side0;
    private $side1;
    private $side2;
    private $height;
    
    public function getArea(){
        return ($this->side0 * $this->height) / 2;
    }
    public function getPerimeter(){
        return $this->side1 + $this->side2 + $this->side0;
    }
    
    public function __construct($side0,$side1,$side2,$height) {
        $this->side0 = $side0;
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->height = $height;
    }    
}

class Circle extends Figure
{
    private $radius;
    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    public function getArea()
    {
        return pi() * $this->radius ** 2;
    }
    
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }    
}

$square = new Square(2);
$triangle = new Triangle( 5, 3, 4, 1);
$rectangle = new Rectangle(0, 0);
$circle = new Circle(2);

echo "Площадь квадрата " . $square->getArea() . "<br>";
echo "Периметр прямоугольника " . $rectangle->getArea() . "<br>";
echo "Площадь треугольника " . $triangle->getArea() . "<br>";
echo "Периметр круга " . $circle->getPerimeter();

