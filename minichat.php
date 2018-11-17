
<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION

?>


<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8" />
    <title>mini_chat</title>
</head>
<body>
<p>
    <header>

</p>
<?php
$jour = date('d');
$mois = date ('m');
$annee = date ('y');
$heure = date('H');
$minute = date('i');
echo '<p>Bonjour ! Nous sommes le <strong>' . $jour . '/' . $mois . '/' . $annee . '</strong> et il est <strong>' . $heure. ' h ' . $minute . '</strong>!</p>';
?>;
<form action="minichat_post.php" method="post">
    <p>
        pseudo :
        <input type="text" name="pseudo" value="<?php if (isset($_COOKIE['pseudo']))
        {
            echo $_COOKIE['pseudo'];
        }else
        {
            echo 'pseudo';
        } ?> " />
        <br/>
        message :
        <input type="text" name="message" /> <br/>

        <input type="submit" value="Valider" /> <br/>

    </p>

    </header>

    <section>

        <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
        }catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        $retour_total= $bdd->query('SELECT COUNT(*) AS total FROM mini_chat'); //Nous récupérons le contenu de la requête dans $retour_total
        $donnees_total=$retour_total->fetch();
        $total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
        $messagesParPage=10;
        $nombreDePages=ceil($total/$messagesParPage);


        if(isset($_GET['page']))
        {
            $pageActuelle=intval($_GET['page']);

            if($pageActuelle>$nombreDePages)
            {
                $pageActuelle=$nombreDePages;
            }
        }
        else
        {
            $pageActuelle=1;
        }

        $premiereEntree=($pageActuelle-1)*$messagesParPage;
        $retour_messages=$bdd->query('SELECT * FROM mini_chat ORDER BY id DESC LIMIT '.$premiereEntree.', '.$messagesParPage.'');

        while ($donnees = $retour_messages->fetch())
        {
            ?>
           <p>
               le <?php echo $donnees['date_creation'] ; ?> <strong> <?php echo htmlspecialchars($donnees['pseudo']) ; ?> </strong> à dit :  <?php echo htmlspecialchars($donnees['message']) ; ?>  <br/>
            </p>

            <?php
        }
        $retour_messages->closeCursor();
        ?>

       <?php echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
            for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
            {
            //On va faire notre condition
            if($i==$pageActuelle)
            {
            echo ' [ '.$i.' ] ';
            }
            else
            {
            echo ' <a href="minichat.php?page='.$i.'">'.$i.'</a> ';
            }
            }
            echo '</p>';?>

    </section>

</form>
</body>

</html>