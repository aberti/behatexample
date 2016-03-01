<?php

class Multiply
{
    private $result;

    public function multiply($a, $b)
    {
        $this->result = $a * $b;
    }

    public function getResult()
    {
        return $this->result;
    }

}