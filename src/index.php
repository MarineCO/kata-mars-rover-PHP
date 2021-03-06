<?php


class Rover {

    private $x = [0, 1, 0, -1];
    private $y = [1, 0, -1, 0];
    private $orientation;
    private $array = ['N', 'E', 'S', 'W'];

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

        $this->turn(false);
    }

    public function left() {

        $this->turn(true);
    }

    public function turn($left) {

        $position = array_search($this->orientation, $this->array);
        $posLeft = $position - 1;
        $posRight = $position + 1;

        if ($left === false) {
            $this->orientation = isset($this->array[$posRight]) ? $this->array[$posRight] : $this->array[0]; 

        } elseif ($left === true) {
            $this->orientation = isset($this->array[$posLeft]) ? $this->array[$posLeft] : $this->array[3];

     }
 }
}

