<?php
// le joueur actuel sera stocké dans une session et dans un cookie qui durera 1 journée
$GLOBALS["db_joueur"] = new SQLite3("joueur.db", SQLITE3_OPEN_READWRITE, "");
$query = "
CREATE TABLE IF NOT EXISTS Joueur;
CREATE TABLE Joueur (
    Id_Joueur BIGINT NOT NULL UNIQUE,
    Mail_Joueur VARCHAR(50),
    Mdp_Joueur VARCHAR(50),
    EstAdmin_Joueur BOOLEAN,
    PRIMARY KEY (Id_Joueur)
);";
$GLOBALS["db_joueur"]->exec($query);

$GLOBALS["db_partie"] = new SQLite3("partie.db", SQLITE3_OPEN_READWRITE, "");
$query = "
CREATE TABLE IF NOT EXISTS Partie;
CREATE TABLE Partie (
    Id_Partie BIGINT NOT NULL UNIQUE,
    Joueur1_Partie BIGINT,
    Joueur2_Partie BIGINT,
    Tour_Partie BOOLEAN,
    Config_Partie VARCHAR(50),
    EstFinie_Partie BOOLEAN,
    PRIMARY KEY (Id_Partie),
    FOREIGN KEY (Joueur1_Partie) REFERENCES Joueur (Id_Joueur),
    FOREIGN KEY (Joueur2_Partie) REFERENCES Joueur (Id_Joueur)
);";
$GLOBALS["db_partie"]->exec($query);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<p>Voici la liste de vos parties...</p>
<!-- afficher la liste des parties du joueur -->

<!-- gérer le cas de l'admin -->
</body>
</html>
