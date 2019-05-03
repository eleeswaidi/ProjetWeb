<?PHP
include "../core/adminC.php";
$clientC=new adminC();

	$clientC->supprimeradmin($_SESSION["cin"]);
	header('Location: afficheradmin.php');


?>
