<?php 

require_once 'rectangle.php';
require_once 'square.php';


$rect = new Rectangle(10,13);

echo $rect->area() . PHP_EOL;
echo $rect->perimeter() . PHP_EOL;


$square = new Square(5);

echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;


