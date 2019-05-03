<?PHP
include "livreur.php";
include "livreurC.php";

if (isset($_POST['ajouter'])  and isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['vehicule']) and isset($_POST['daten'])){
$livreur1=new livreur("",$_POST['cin'], $_POST['nom'],$_POST['prenom'],$_POST['vehicule'],$_POST['daten']);

/*
var_dump($livreur1);
}
*/
//Partie3
$livreur1C=new LivreurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: livreurr.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>