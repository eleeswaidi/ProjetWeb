<?PHP
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['cin']) and isset($_POST['login']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['adr']) and isset($_POST['m1']) and isset($_POST['cp']) and isset($_POST['mdp'])){
$client1=new client($_POST['cin'],$_POST['login'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['adr'],$_POST['m1'],$_POST['cp'],$_POST['mdp']);

echo $client1->nom;
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$client1C=new clientC();
$client1C->ajouterclient($client1);
echo "bonjour";
//header('Location: afficherclient.php');

}else{
	echo "vérifier les champs";
}
//*/

?>
