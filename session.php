

<?php session_start(); ?>
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

   <p>Cette page est faite pour aider Aurore à organiser les raids ex !</p>
   <p>Vous êtes connectés en tant que <strong><?php echo ($_SESSION['pseudo']) ?></strong></p>
   <p>Cliquez sur le bouton suivant pour vous inscrire au prochain raid ex, ou vous supprimer</p>
   <button id="ajout" onclick="myFunction()">s'inscrire</button>
   <button id="supp">se désinscrire</button>
   <form style="display: none;" action="inscription.php" method="post" id="myForm"  >
       Pseudo:<br>
       <input type="text" name="pseudo" value="<?php echo ($_SESSION['pseudo']) ?>">
       <input type="submit" name="envoyer">
   </form>

   <button onclick="redirect()">voir les inscrits</button>


   <script > /*function addField (argument) {
           var myTable = document.getElementById("myTable");
           var currentIndex = myTable.rows.length;
           var currentRow = myTable.insertRow(-1);

           var linksBox = document.createElement("input");
           linksBox.setAttribute("name", "links" + currentIndex);

           var keywordsBox = document.createElement("input");
           keywordsBox.setAttribute("name", "keywords" + currentIndex);

           var violationsBox = document.createElement("input");
           violationsBox.setAttribute("name", "violationtype" + currentIndex);







           var currentCell = currentRow.insertCell(-1);
           currentCell.appendChild(linksBox);

           currentCell = currentRow.insertCell(-1);
           currentCell.appendChild(keywordsBox);

           currentCell = currentRow.insertCell(-1);
           currentCell.appendChild(violationsBox);

           localStorage.setItem("inscrit", );*/

   function redirect(){
       window.location.href='tableau.php';
   }

  function myFunction(){
      var x=document.getElementById("myForm");
      if (x.style.display = "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }
  }</script>
   </body>
</html>