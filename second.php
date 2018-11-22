
<?php
session_start();
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="screen.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <title>Mes petits comptes</title>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'></script>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

    </head>
    <body>
        <p>Possédez vous des petits comptes?</p>
        <button onclick="myFunction()">oui</button>
        <button onclick="Redirect()">non</button>
        <form  id="myform" action="" method="post" style="display: none">
            <p>
                <label for="petits">Combien de petits comptes possédez-vous?</label>
                <input type="text" name="petits" id="petits"/>

                <input type="submit" value="Valider"  id="validate" onclick="openModal()"/>
            </p>
        </form>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display : none" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
                            if (isset($_POST['petits'])){
                                $numPetitsComptes = $_POST['petits'];
                                for ( $i=0; $i<$numPetitsComptes; $i++) {
                                    ?> <input type="text" name ="pseudo">
                                    </br>

                                <?php } }?>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

        <script>



            function myFunction() {
                let x = document.getElementById("myform");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

            function Redirect(){
                window.location.href='protection.php';
            }
    function openModal(){
     var a = document.getElementById("exampleModal");
     if (a.style.display === "none") {
         a.style.display = "block";
     } else {
         a.style.display = "none";
     }
 }
            $('#myform').on('submit', function(e){
                $('#myModal').modal('show');
                e.preventDefault();
            });
        </script>



    </body>
</html>
