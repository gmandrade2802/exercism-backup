<?php
class Size 
{
    public $height = null;
    public $width = null;

    public function __construct($height,$width) {
        $this->height = $height;
        $this->width = $width;
    }
}