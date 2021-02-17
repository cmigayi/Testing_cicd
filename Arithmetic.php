<?php

class Arithmetic 
{
    private $result;

    public function add($num1, $num2)
    {
        $this->result = $num1 + $num2;
        return $this->result;
    }

    public function subtract($num1, $num2)
    {
        $this->result = $num1 - $num2;
        return $this->result; 
    }
}