<?php
// inscrire le nouveau joueur après avoir vérifié qu'il n'existe pas déjà dans la db et le stocker dans la session et dans un cookie qui dure 1 journée
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
    <title>Inscription</title>
</head>
<body>
<form name="inscription" method="post" action="inscription.php">
    <fieldset>
        <legend>Inscription</legend>
        <label for="mail">Mail</label>
        <input type="text" id="mail" name="mail" maxlength="50" autofocus>
        <label for="motDePasse">Mail</label>
        <input type="password" id="motDePasse" name="motDePasse" maxlength="50">
        <input type="submit" name="submit_connexion" value="Se connecter">
    </fieldset>
</form>
<p>Vous avez déjà un compte ? Connectez-vous <a href="connexion.php">ici</a></p>
</body>
</html>
