<?PHP
include "livraisonCC.php";
$livraisonC=new LivraisonC();
if (isset($_POST['id'])){
	$livraisonC->supprimerLivraison($_POST['id']);
	header('Location: livraisonn.php');
}

?>