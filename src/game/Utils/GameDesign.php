<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siam</title>
    <link rel="stylesheet" href="./Main.css">
</head>

<body>

    <div class='board'>
        <?php
        require_once 'Utils/GameDesign.php';
        require_once 'Classes/Pieces.php';
        require_once 'Classes/Board.php';
        require_once 'Classes/Player.php';

        $board = new Board(5);

        for ($row = 0; $row < $board->getSize(); $row++) {
            for ($col = 0; $col < $board->getSize(); $col++) {
                $piece = $board->getPieceAtPosition($row, $col);
                $piece->afficher();
                echo "<p> bonjour </p>";
            }
        }
        ?>
    </div>

</body>

</html>
