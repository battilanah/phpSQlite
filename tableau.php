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
    <style>
        body{
            background: url("tab.png") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon go</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />


    <link rel="stylesheet" media="screen and (max-width: 400px)" href="tab.css" />
    <![endif]-->
</head>
<body>

<div><?php

$db = new PDO('sqlite:pokemon.db');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






$reqBlue = "SELECT * FROM inscrits WHERE couleur='bleu'  ";
$stmtBlue = $db->prepare($reqBlue);


$stmtBlue->execute();
$rowBlue = $stmtBlue->fetch();


    $reqYellow = "SELECT * FROM inscrits WHERE couleur='jaune' ";
    $stmtYellow = $db->prepare($reqYellow);


    $stmtYellow->execute();
    $rowYellow = $stmtYellow->fetch();

    $reqRed = "SELECT * FROM inscrits WHERE couleur='rouge' ";
    $stmtRed = $db->prepare($reqRed);


    $stmtRed->execute();
    $rowRed = $stmtRed->fetch();




    //AFFICHAGE DE TOUS LES UTILISATEURS
/*  $stmt = $db->prepare("SELECT * FROM users");
  $stmt->execute();
  $result = $stmt->fetchAll();
  print_r($result);
*/
$reqBis = "SELECT * FROM planification  ";
$stmtBis = $db->prepare($reqBis);


$stmtBis->execute();
$rowBis = $stmtBis->fetch();

if (isset($rowBis['jour']) and isset($rowBis['heure']) and isset($rowBis['arène'])) {
    echo "<p>" . $rowBis['arène'] . "</p>";
    echo "<p>" . $rowBis['jour'] . "</p>";
    echo "<p>" . $rowBis['heure'] . "</p>";
}
echo "<table border='1'>
<tr>
<th style='background-color: blue'>Bleu</th>


</tr>";




while($testBlue = $stmtBlue->fetch())
{
    echo "<tr>";
    echo "<td>" . $testBlue['name']. "</td>";

    echo "</tr>";
}
echo "</table> </br>";

    echo "<table border='1'>
<tr>
<th style='background-color: yellow'>Jaune</th>


</tr>";

    while($testYellow= $stmtYellow->fetch())
    {
        echo "<tr>";
        echo "<td>" . $testYellow['name']. "</td>";

        echo "</tr>";
    }
echo "</table>  </br>";

    echo "<table border='1'>
<tr>
<th style='background-color: red'>Rouge</th>


</tr>";

while($testRed = $stmtRed->fetch())
{
    echo "<tr>";
    echo "<td>" . $testRed['name']. "</td>";

    echo "</tr>";
}
echo "</table>";

?>
</div>
<button onclick="myFunction()">Revenir à ma session</button>
<script>
    function myFunction(){
        window.location.href='session.php';
    }
</script>

</body>
</html>

