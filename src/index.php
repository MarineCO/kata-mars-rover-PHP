<?php


 class Rover {

    private $x;
    private $y;
    private $position;
  
    public function __construct($x, $y, $position) {
        $this->x = $x;
        $this->y = $y;
        $this->position = $position;
    }

    public function getPosition() {
        return [
        $this->x,
        $this->y,
        $this->position
        ];

    }

    
}
 
