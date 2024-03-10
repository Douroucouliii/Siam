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
            $this->grid[] = array();
            for ($j = 0; $j < $this->size; $j++) {
                $this->grid[$i][$j] = null;
            }
        }
        //On place les rochers par défaut
        $this->grid[2][1] = new Piece("Rocher", "N");
        $this->grid[2][2] = new Piece("Rocher", "N");
        $this->grid[2][3] = new Piece("Rocher", "N");
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

    public function updateBoard() {
        //On met à jour le plateau
    }

    public function getPieceAtPosition($x, $y){
        return $this->grid[$x][$y];
    }

    public function getSize(){
        return $this->size;
    }

    public function printBoard(){
        for ($i = 0; $i < $this->size; $i++) {
            echo "<br>";
            for ($j = 0; $j < $this->size; $j++) {
                $piece = $this->grid[$i][$j];
                if($piece != null){
                    echo $piece->printPiece();
                }else{
                    echo "__________";
                }
            }
        }
    }
}


?>