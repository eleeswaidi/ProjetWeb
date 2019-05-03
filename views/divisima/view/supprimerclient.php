<?PHP
session_start();

include "../core/clientC.php";
$clientC=new clientC();

	$clientC->supprimerclient($_SESSION["cin"]);
	header('Location: ../logout.php');


?>
