<?PHP
include "../core/clientC.php";
$clientC=new clientC();
if (isset($_POST["cin"])){
	$clientC->supprimerclient($_POST["cin"]);
	header('Location: afficherclient.php');
}

?>
