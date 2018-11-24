
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>Mon Compte</title>
    <meta charset="utf-8" />
    <link href="main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="responsiveform.css">
    <link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
    <link rel="stylesheet" media="screen and (max-width: 380px)" href="responsiveform3.css" />
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

            <input type="submit" value="Valider" style="width: 50%;" />
            </p>
        </form>


    </body>
</html>

