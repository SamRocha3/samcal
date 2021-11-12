<?php

class Calculator
{
    public float $first_number;
    public float $second_number;
    public float $total;

    function __construct($first_number, $second_number, $operation ){
        $this -> total = 0;
        $this -> first_number = 0;
        $this -> second_number = 0;
    }

    public function calculate($first_number, $second_number)
    {
        $this->first_number = $first_number;
    }

    public function somar(){
        $this->total = $this->n1 + $this->n2;
    }
    public function subtrair(){
        $this->total = $this->n1 - $this->n2;
    }
    public function dividir(){
        $this->total = $this->n1 / $this->n2;
    }
    public function multiplicar(){
        $this->total = $this->n1 * $this->n2;
    }
}