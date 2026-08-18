<?php
class Position 
{
    public $x = null;
    public $y = null;

    public function __construct($y,$x) {
        $this->y = $y;
        $this->x = $x;        
    }
}