<?PHP
include_once "livraison.php";
include "LivraisonCC.php";

if (isset($_POST['destination']) and isset($_POST['dated']) and isset($_POST['datef']) and isset($_POST['idclient']) and isset($_POST['idarticle'])){
$livraison1=new livraison("",$_POST['destination'], $_POST['dated'],$_POST['datef'],$_POST['idclient'],$_POST['idarticle']);

/*
var_dump($livreur1);
}
*/
//Partie3
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
header('Location: livraisonn.php');
	
 }
else{
	echo "vérifier les champs";
}
//*/

?>