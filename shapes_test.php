<?php
require 'rectangle.php';
require 'square.php';

$rect = new Rectangle(10,13);

echo $rect->getArea() . PHP_EOL;
echo $rect->perimeter() . PHP_EOL;


$square = new Square(5);

echo $rect->getArea() . PHP_EOL;
echo $rect->perimeter() . PHP_EOL;


