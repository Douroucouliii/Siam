<?php

#######################################
##### MAIN POUR JOUER UNE PARTIE ######
#######################################

//require_once 'Utils/GameDesign.php';

require_once 'Classes/Piece.php';
require_once 'Classes/Board.php';
require_once 'Classes/Player.php';

//Création du plateau de jeu
$board = new Board(5);

//Création des joueurs
$player1 = new Player("Joueur 1");
$player2 = new Player("Joueur 2");

//Initialisation des mains des joueurs
for($i = 0; $i < 5; $i++){
    $player1->addPieceToHand(new Piece("Elephant", "N"));
    $player2->addPieceToHand(new Piece("Rhinoceros", "N"));
}

$playerTurn = true;

while(!endGame()){
    if($playerTurn){
        //On demande au joueur 1 de jouer
        $player1->jouer();
        //On passe le tour au joueur 2
        $playerTurn = false;
    } else{
        $player2->jouer();
        $playerTurn = true;
    }
    $board->updateBoard();
    break;
}

function endGame(){
    return false;
}

##############AFFICHAGE###############

$player1->printHand();
//pour l'instant j'affiche juste le board, on le fera avec GameDesign.php plus tard
$board->printBoard();
$player2->printHand();

?>