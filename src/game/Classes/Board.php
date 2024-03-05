<?php

#######################################
######### DEFINITION DU BOARD #########
#######################################

class Board {

    private $grid;
    private $size;

    public function __construct($size) {
        $this->size = $size;
        $this->initGrid();
    }

    #Plateau de jeu composé de Piece (null si case vide)
    private function initGrid() {
        //On crée un tableau de taille size*size
        $this->grid = array();
        for ($i = 0; $i < $this->size; $i++) {
            $this->grid[$i] = array();
            for ($j = 0; $j < $this->size; $j++) {
                $this->grid[$i][$j] = null;
            }
        }
        //On place les rochers par défaut
        placePiece(new Piece("Rocher", "N"), 2, 1);
        placePiece(new Piece("Rocher", "N"), 2, 2);
        placePiece(new Piece("Rocher", "N"), 2, 3);
    }

    public function placePiece($piece, $x, $y) {
        $this->grid[$x][$y] = $piece;
    }

    public function movePiece($piece, $x, $y) {
        $this->grid[$x][$y] = $piece;
    }

    public function orientatePiece($piece, $orientation) {
        $piece->setOrientation($orientation);
    }

    public function removePiece($x, $y) {
        $this->grid[$x][$y] = null;
    }
}


?>