<?PHP
session_start();
echo "bienvenu " . $_SESSION["log"] . $_SESSION["cin"] .".<br>";

?>
<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (!empty($_POST['nom']))
{
	$client=new client($_SESSION["cin"],$_SESSION["log"],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['adresse'],$_POST['email'],$_POST['cp'],$_POST['mdp']);
	$clientC = new clientC();
	$clientC->modifierclient($client,$_POST['cin']);
	echo $_POST['cin'];
	header('Location: afficherclient.php');
}
else {
	echo " aaaaaaaaaaa";
}
?>
