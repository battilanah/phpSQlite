<?php
session_start();?>




<!DOCTYPE html>
<html>
<head>
    <title>FormGet Responsive Form</title>
    <!-----Including CSS for different screen sizes----->
    <link rel="stylesheet" type="text/css" href="responsiveform.css">
    <link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
    <link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
    <link rel="stylesheet" media="screen and (max-width: 380px)" href="responsiveform3.css" />

</head>
<body>
<div id="envelope">
    <form action="secret.php" method="post">
        <header>
            <h2>Guest - Raids ex</h2>
            <p>C'est parti pour un raid ex!</p>
        </header>
        <label>Votre pseudo</label>
        <input name="pseudo" placeholder="Votre pseudo" type="text" width="100px;">
        <label>Votre mot de passe</label>
        <input name="mot_de_passe" placeholder="password" type="password">
        <label>Lien vers Guests</label>
        <input name="website" placeholder="https://www.facebook.com/groups/210644012850565" type="text">
        <label>Message</label>
        <textarea cols="15" name="message" placeholder="Message" rows="10">
</textarea>
        <div id="validation">
        <input id="submit" type="submit" value="Se connecter">
        <button onclick="myComptes()">Pas encore inscrit?</button>
        </div>
    </form>
</div>
<script>
    function myComptes(){
        window.location.href="create.php";
    }
</script>
</body>
</html>