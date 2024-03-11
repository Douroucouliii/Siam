<?php
// stocker le joueur actuel dans la session et dans un cookie qui dure 1 journée
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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<form name="connexion" method="post" action="connexion.php">
    <fieldset>
        <legend>Connexion</legend>
        <label for="mail">Mail</label>
        <input type="text" id="mail" name="mail" maxlength="50" autofocus>
        <label for="motDePasse">Mail</label>
        <input type="password" id="motDePasse" name="motDePasse" maxlength="50">
        <input type="submit" name="submit_connexion" value="Se connecter">
    </fieldset>
</form>
<p>Vous n'avez pas encore de compte ? Créez-en un <a href="inscription.php">ici</a></p>
</body>
</html>
