<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Contour
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130706

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon go</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />


    <link href="screen.css" rel="stylesheet">
    <![endif]-->
</head>
<body>

<?php

$db = new PDO('sqlite:pokemon.db');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






$req = "SELECT name FROM inscrits  ";
$stmt = $db->prepare($req);


$stmt->execute();
$row = $stmt->fetch();



//AFFICHAGE DE TOUS LES UTILISATEURS
/*  $stmt = $db->prepare("SELECT * FROM users");
  $stmt->execute();
  $result = $stmt->fetchAll();
  print_r($result);
*/

echo "<table border='1'>
<tr>
<th>Pseudo</th>

</tr>";

while($test = $stmt->fetch())
{
    echo "<tr>";
    echo "<td>" . $test['name']. "</td>";
    echo "</tr>";
}
echo "</table>";

?>
<button onclick="myFunction()">Revenir à ma session</button>
<script>
    function myFunction(){
        window.location.href='session.php';
    }
</script>

</body>
</html>

