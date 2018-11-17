
<?php session_start();
?>

<?php

if( isset($_POST['pseudo']) and isset($_POST['mot_de_passe']) ) {
    $db = new PDO('sqlite: pokemon.db');
    $name=$_POST['pseudo'];
    $pwd=$_POST['mot_de_passe'];


$req = "INSERT INTO users (name, pwd) VALUES($name , $pwd)";
    $db->exec($req);
 echo(var_dump($db));
try {
    $req = "SELECT PWD FROM users WHERE name=a ";
    $res = $db->exec($req);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
echo $res;


}

/*header('location:protection.php');*/
?>




