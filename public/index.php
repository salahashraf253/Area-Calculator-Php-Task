<?php
require 'Shapes/Square.php';
require 'Shapes/Rectangle.php';
require 'Shapes/Triangle.php';

$sq = new Square(5);
echo $sq->calculateArea();

$rect = new Rectangle(5, 10);
echo $rect->calculateArea();

$tri = new Triangle(5, 10);
echo $tri->calculateArea();
