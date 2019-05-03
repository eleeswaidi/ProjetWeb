
<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (!empty($_POST['cin']))
{
	$client=new client($_POST['cin'],$_POST['nom'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['adresse'],$_POST['email'],$_POST['cp'],$_POST['mdp']);
	$clientC = new clientC();
	$clientC->modifierclient($client,$_POST['cin']);
	echo $_POST['cin'];
	header('Location: afficherclient.php');
}
else {
	echo " aaaaaaaaaaa";
}
?>
