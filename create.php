
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma super page PHP</title>
</head>
<body>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon Compte</title>
    </head>
    <body>


        <p>Veuillez entrer un nom d'utilisateur et un mot de passe:</p>
        <form action="data.php" method="post">
            <p>
                <input type="text" name="pseudo">
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>


    </body>
</html>

