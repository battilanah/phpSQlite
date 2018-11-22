<?php
session_start();?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma super page PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="screen.css" rel="stylesheet">
</head>
<body>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
    

        <p>Veuillez vous connecter:</p>
        <form action="secret.php" method="post">
            <p>
                <input type="text" name="pseudo">
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Si vous n'avez pas encore de compte, il suffit de cliquer <a href="create.php">ici </a></p>


    </body>
</html>