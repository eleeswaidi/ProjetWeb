<?PHP
session_start();


?>
<?PHP
include "../entities/admin.php";
include "../core/adminC.php";

	$client=new admin($_SESSION["psw"],$_POST['login'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['lieu'],$_POST['m1'],$_POST['mdp']);
	$clientC = new adminC();
	$clientC->modifieradmin($client,$_SESSION["psw"]);
	
	header('Location: afficheradmin.php');



?>
