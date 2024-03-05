<?php

class Piece{

    private $type;
    private $orientation;

    public function __construct($type, $orientation){
        $this->type = $type;
        $this->orientation = $orientation;
    }

    public function getType(){
        return $this->type;
    }

    public function getOrientation(){
        return $this->orientation;
    }
    
    public function setOrientation($orientation){
        $this->orientation = $orientation;
    }
}

?>