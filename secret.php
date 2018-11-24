<?php session_start();
?>

<?php
if(!empty($_POST['pseudo']) && !empty($_POST['mot_de_passe']) ) {
    $pseudo=$_POST['pseudo'];
    $pass=$_POST['mot_de_passe'];

    $db = new PDO('sqlite:pokemon.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS users (
         id INTEGER PRIMARY KEY AUTOINCREMENT,
         name TEXT NOT NULL,
         pwd TEXT NOT NULL)
            ");




    $req = "SELECT * FROM users WHERE name=:name AND pwd=:pwd";
    $stmt = $db->prepare($req);
    $stmt->bindParam(':name', $pseudo);
    $stmt->bindParam(':pwd', $pass);
    $stmt->execute();
    $row = $stmt->fetchAll();
    //AFFICHAGE DE TOUS LES UTILISATEURS
    /*  $stmt = $db->prepare("SELECT * FROM users");
      $stmt->execute();
      $result = $stmt->fetchAll();
      print_r($result);
  */

    $res= count($row);

    /*header('location:protection.php');*/

    if($res>0) {
        header("Location: session.php");
    }
    else {
        echo ("<script>
   window.alert('ce compte n\'existe pas !');
   window.location.href='index.php';
   </script>");


    }


}
else{

    echo ("<script>
   window.alert('ce compte n\'existe pas !');
   window.location.href='index.php';
   </script>");

}

$_SESSION['pseudo']=$_POST['pseudo'];






