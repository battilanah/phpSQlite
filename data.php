<?php session_start();
?>

<?php
if( isset($_POST['pseudo']) and isset($_POST['mot_de_passe']) ) {

    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS users (
          id INTEGER PRIMARY KEY AUTOINCREMENT,
          name TEXT NOT NULL,
          pwd TEXT NOT NULL,
          couleur TEXT NOT NULL)
             ");

    $pseudo=$_POST['pseudo'];
    $pass=$_POST['mot_de_passe'];
    $couleur=$_POST['couleur'];


    $req = "INSERT INTO users (name, pwd, couleur) VALUES(:pseudo , :pass, :couleur)";
    $stmt = $db->prepare($req);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':pass', $pass);
    $stmt->bindParam(':couleur', $couleur);
    $stmt->execute();
  /*  //AFFICHAGE DE TOUS LES UTILISATEURS
    $stmt = $db->prepare("SELECT * FROM users");
    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r($result);*/
    header('location:second.php');

}


?>




