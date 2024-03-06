<?php

#######################################
####### DEFINITION D'UN JOUEUR ########
#######################################

class Player{
    private $hand;
    private $name;

    public function __construct($name){
        $this->name = $name;
        $this->hand = array();
    }

    public function addPieceToHand($piece){
        $this->hand[] = $piece;
    }

    public function removePieceFromHand($piece){
        $key = array_search($piece, $this->hand);
        if($key !== false){
            unset($this->hand[$key]);
        }
    }

    public function jouer(){
        echo $this->name . " joue";
    }

    public function printHand(){
        echo "<br>Main de " . $this->name . " : ";
        foreach($this->hand as $piece){
            echo $piece->printPiece() . " ";
        }
    }
}

?>