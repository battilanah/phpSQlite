

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
    <style>
        body{
            background: url('tab.png') no-repeat center center fixed;

            background-size: cover;
            /* For older browsers */
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            min-height:800px;}

        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon go</title>
    <meta name="keywords" content="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <meta name="description" content="" />



    <![endif]-->
</head>
   <body>

   <p>Cette page est faite pour aider Aurore à organiser les raids ex !</p>
   <p>Vous êtes connectés en tant que <strong><?php echo ($_SESSION['pseudo']) ?></strong></p>
   <p>Cliquez sur le bouton suivant pour vous inscrire au prochain raid ex, ou vous supprimer</p>
   <button id="ajout" onclick="myFunction()">s'inscrire</button>
   <button id="supp">se désinscrire</button>
   <form style="display: none;" action="inscription.php" method="post" id="myForm">

       <input type="text" name="pseudo" value="<?php echo ($_SESSION['pseudo']) ?>">
       <input type="submit" name="envoyer">
   </form>
  <p> <?php if($_SESSION['pseudo']=="dawn3785"){
       ?> <p>Vous êtes admin!</p>
       <p>Vous avez le privilège de pouvoir rentrer la date et le nom de l'arène du prochain raid ex </p><br>
      <button onclick="organiser()">Organiser un raid ex</button>

       <form action="planification.php" method="post" id="organiser" style="display: none">
           <label for="jour">Jour:</label><br>
       <input type="text" name="jour"><br>
           <label for="appt">heure </label><br>
   <input type="time" id="appt" name="appt"
          min="9:00"  required><br>
           <label for="arene">arène:</label><br>
           <input type="text" name="arene"><br>
   <input type="submit" name="valider">
       </form>


   <button id="supp">supprimer raid ex</button>

   <?php } ?></p>


   <button onclick="ajout()">Inscrire ses petits comptes</button>
   <button onclick="redirect()">voir les inscrits</button>
   <button onclick="redirectBis()">ajouter un petit compte nouveau !</button>
   <button id="deco" >se déconnecter</button>


   <script >

   function redirect(){
       window.location.href='tableau.php';
   }

   function redirectBis(){
       window.location.href='second.php';
   }

   function ajout(){
       window.location.href='ajoutsPetits.php'
   }

  function myFunction() {
      var x = document.getElementById("myForm");
      if (x.style.display = "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }
  }

  function organiser(){
      var x = document.getElementById("organiser");
      if (x.style.display = "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }

  }




  </script>

   <script type="text/javascript">
       $(document).ready(function(){
           $(#supp).click(function(){

               $.ajax({
                   type: 'POST',
                   url: 'cron.php',
                   success: function(data) {
                       $("p").text(data);
                   }
               });
           });
       });
   </script>
   </body>
</html>