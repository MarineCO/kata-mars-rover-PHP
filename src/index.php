<?php


 class Rover {

    private $x;
    private $y;
    private $orientation;
  
    public function __construct($x, $y, $orientation) {
        $this->x = $x;
        $this->y = $y;
        $this->orientation = $orientation;
    }

    public function getPosition() {
        return [
        $this->x,
        $this->y,
        $this->orientation
        ];

    }

    public function forward() {
        if($this->orientation === 'N' ){
            [$this->x = $this->x,
            $this->y = $this->y + 1 ];
        }elseif($this->orientation === 'S'){
            [$this->x = $this->x,
            $this->y = $this->y -1 ];
        }elseif($this->orientation === 'W'){
            [$this->x = $this->x -1,
            $this->y = $this->y];
        }elseif($this->orientation === 'E'){
            [$this->x = $this->x + 1,
            $this->y = $this->y];
        }
        
    }

    public function backward() {
        if($this->orientation === 'N'){
            [$this->x = $this->x,
             $this->y = $this->y - 1];
        }elseif($this->orientation === 'S'){
            [$this->x = $this->x,
             $this->y = $this->y + 1];
        }elseif($this->orientation === 'W'){
            [$this->x = $this->x + 1,
             $this->y = $this->y];
        }elseif($this->orientation === 'E'){
            [$this->x = $this->x - 1,
             $this->y = $this->y];
        }
    }

    public function right() {
        if ($this->orientation === 'N') {
            $this->orientation = 'E';
        } elseif ($this->orientation === 'E') {
            $this->orientation = 'S';
        } elseif ($this->orientation === 'S') {
            $this->orientation = 'W';
        } elseif ($this->orientation === 'W') {
            $this->orientation = 'N';
        }
    }


}
 
