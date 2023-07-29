<?php
require 'Shape.php';

class Square implements Shape{
    private $length;

    public function __construct($length){
        $this->length = $length;
    }

    public function calculateArea(){
        return $this->length * $this->length;
    }
}