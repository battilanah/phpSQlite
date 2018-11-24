<?php
if( isset($_POST['date']) AND isset($_POST['appt'] )) {

    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS planification (
          id INTEGER PRIMARY KEY AUTOINCREMENT,
          jour TEXT NOT NULL,
          heure TEXT NOT NULL,
          arène TEXT NOT NULL
         )
             ");

    $jour=$_POST['date'];
    $heure=$_POST['appt'];



    $req = "INSERT INTO planification (jour, heure) VALUES(:jour, :heure )";
    $stmt = $db->prepare($req);
    $stmt->bindParam(':jour', $jour);
    $stmt->bindParam(':heure', $heure);
    $stmt->execute();
    /*  //AFFICHAGE DE TOUS LES UTILISATEURS
      $stmt = $db->prepare("SELECT * FROM users");
      $stmt->execute();
      $result = $stmt->fetchAll();
      print_r($result);*/
    header('location:session.php');

}


?>