<?php
include "../../entity/User.php";
include '../../core/crud.php';
if (ISSET($_POST['email']) && (ISSET($_POST['mdp']))) {
	$email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $c=new Crud();
    $user = $c->checkloginC($email,$mdp);
    if($user){
    	session_start();
    	$_SESSION['nom'] = $user['nom'];
         $_SESSION['prenom'] = $user['prenom'];
         $_SESSION['mdp'] = $user['mdp'];
         $_SESSION['email'] = $user['email'];
         $_SESSION['role'] = $user['role'];
        
         echo "<script language=\"javascript\">document.location.href='index.php';</script>";

    }
	}
?>
