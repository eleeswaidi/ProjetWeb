<?PHP
include "../entities/admin.php";
include "../core/adminC.php";

if (isset($_POST['cina']) and isset($_POST['logina']) and isset($_POST['noma']) and isset($_POST['prenoma']) and isset($_POST['tela']) and isset($_POST['lieua']) and isset($_POST['m1a']) and isset($_POST['mdpa'])){
$admin1=new admin($_POST['cina'],$_POST['logina'],$_POST['noma'],$_POST['prenoma'],$_POST['tela'],$_POST['lieua'],$_POST['m1a'],$_POST['mdpa']);

echo $admin1->nom;
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$admin1C=new adminC();
$admin1C->ajouteradmin($admin1);
echo "bonjour";
//header('Location: afficherclient.php');

}else{
	echo "vérifier les champs";
}
//*/

?>
