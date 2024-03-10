document.addEventListener('DOMContentLoaded', main);

/*
R : Rocher
E : Elephant
R : Rhinocéros
+ N/S/E/O : Nord/Sud/Est/Ouest
*/
var board = [
    ['_', '_', '_', '_', '_'],
    ['_', '_', '_', '_', '_'],
    ['_', 'R', 'R', 'R', '_'],
    ['_', '_', '_', '_', '_'],
    ['_', '_', '_', '_', '_']
];

var hand1 = ['EN', 'EN', 'EN', 'EN', 'EN'];
var hand2 = ['RN', 'RN', 'RN', 'RN', 'RN'];

function main() {
    play();
}

function play() {
    while (true) {
        printHand(hand1);
        printBoard();
        printHand(hand2);
        break;
    }
}

function printBoard() {
    var divBoard = document.getElementById('board');

    //Ajouter une div pour chaque case du tableau et afficher le contenu
    for (let i = 0; i < board.length; i++) {
        for (let j = 0; j < board[i].length; j++) {
            var div = document.createElement('div');
            div.classList.add('cell');
            div.innerHTML = getImageFrom(board[i][j]);
            divBoard.appendChild(div);
        }
    }
}

function printHand(hand) {
    var divHand = document.getElementById('hand' + (hand == hand1 ? '1' : '2'));

    //Ajouter une div pour chaque pièce de la main et afficher le contenu
    for (let i = 0; i < hand.length; i++) {
        var div = document.createElement('div');
        div.classList.add('cell');
        div.innerHTML = getImageFrom(hand[i]);
        divHand.appendChild(div);
    }

}

function getImageFrom(piece) {
    switch (piece) {
        case '_':
            return '';
        case 'R':
            return '<img src="../../data/Rocher.gif" alt="Rocher">';
        case 'EN':
            return '<img src="../../data/ElephantN.gif" alt="ElephantN">';
        case 'ES':
            return '<img src="../../data/ElephantS.gif" alt="ElephantS">';
        case 'EO':
            return '<img src="../../data/ElephantO.gif" alt="ElephantO">';
        case 'EE':
            return '<img src="../../data/ElephantE.gif" alt="ElephantE">';
        case 'RN':
            return '<img src="../../data/RhinocerosN.gif" alt="RhinocerosN">';
        case 'RS':
            return '<img src="../../data/RhinocerosS.gif" alt="RhinocerosS">';
        case 'RE':
            return '<img src="../../data/RhinocerosE.gif" alt="RhinocerosE">';
        case 'RO':
            return '<img src="../../data/RhinocerosO.gif" alt="RhinocerosO">';
    }
}