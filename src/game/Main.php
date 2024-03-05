<?php

require_once 'Utils/GameDesign.php';
require_once 'Classes/Pieces.php';
require_once 'Classes/Board.php';
require_once 'Classes/Player.php';

$board = new Board(5);

$hand1 = [new Piece("Rhinoceros","N"), new Piece("Rhinoceros","N"), new Piece("Rhinoceros","N"), new Piece("Rhinoceros","N"), new Piece("Rhinoceros","N")];
$hand2 = [new Piece("Elephant", "N"), new Piece("Elephant", "N"), new Piece("Elephant", "N"), new Piece("Elephant", "N"), new Piece("Elephant", "N")];

$playerTurn = true;

while(!endGame()){

}

function endGame(){
    return false;
}

?>