<?php session_start();

    



if( isset($_POST['pseudo']) and isset($_POST['mot_de_passe']) ) {
    $db = new SQLite3('sqlite:users.db');
    $name=$_POST['pseudo'];
    $req = $db->prepare('SELECT password FROM users WHERE username=:username');
    $req->execute(array(
        'username' => $name,
        ));


		if($req->rowCount()>0) {
			header("Location: session.php");
		}
		else {
	        session_start();
	        $_SESSION['user']=$user;
			header('location: protection.php');
		}
}








