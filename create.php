
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <title>Ma super page PHP</title>
    <link href="main.css" rel="stylesheet">
</head>
<body>


<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="screen.css" rel="stylesheet">
        <meta charset="utf-8" />
        <title>Mon Compte</title>
    </head>
    <body>


        <p>Veuillez entrer un nom d'utilisateur et un mot de passe:</p>
        <form action="data.php" method="post">
            <p><label for="pseudo">Votre pseudo de joueur</label><br>
                <input type="text" name="pseudo" placeholder="Votre pseudo de joueur"><br>
                <label for="couleur">votre couleur</label>
                <br>
                <input type="text" name="couleur" placeholder="Votre couleur" />
                <br>
                <label for="mot_de_passe">Votre mdp</label>
                <br>
            <input type="password" name="mot_de_passe" placeholder="Votre mdp" />

            <input type="submit" value="Valider" />
            </p>
        </form>


    </body>
</html>

