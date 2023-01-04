<?php


interface Form {
    public function getType();
    public function getArea();
}
class Square implements Form {

    private $weight;
    private $height;

    public function __construct($weight, $height)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    public function getType()
    {
        return 'quadrado';
    }

    public function getArea()
    {
        return $this->weight * $this->height;
    }

}

class Circle implements Form {

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getType()
    {
        return 'círculo';
    }

    public function getArea()
    {
        return round(pi() * pow($this->radius, 2), 2);
    }

}

$square = new Square(5, 5);
$circle = new Circle(7);

$objects = [
    $square,
    $circle,
];

foreach($objects as $object) {

    $type = $object->getType();
    $area = $object->getArea();

    echo 'Area do ' . $type . ': ' . $area . '<br/>';
    
}