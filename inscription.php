

<?php session_start();
?>

<?php
if( isset($_POST['pseudo'] )) {

    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS inscrits (
          id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL
         )
             ");

    $pseudo=$_POST['pseudo'];



    $req = "INSERT INTO inscrits (name) VALUES(:pseudo )";
    $stmt = $db->prepare($req);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();
    /*  //AFFICHAGE DE TOUS LES UTILISATEURS
      $stmt = $db->prepare("SELECT * FROM users");
      $stmt->execute();
      $result = $stmt->fetchAll();
      print_r($result);*/
    header('location:session.php');

}


?>