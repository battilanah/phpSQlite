<?php
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
}catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO mini_chat(pseudo, message, date_creation) VALUES(:pseudo,
:message, NOW())');
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'message' => $_POST['message'],
));

if ($_POST['pseudo']){
    header('location:session.php');
}


?>