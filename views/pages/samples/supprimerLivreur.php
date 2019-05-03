<?PHP
include "livreurC.php";
$livreurC=new LivreurC();
if (isset($_POST['id'])){
	$livreurC->supprimerLivreur($_POST["id"]);
	header('Location: livreurr.php');
}

?>