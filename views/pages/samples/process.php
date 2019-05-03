<?php
//connect to database
$db =mysqli_connect('localhost','root','','wapi');
// if save button is clicked
if (isset($_POST['save']))
{
	$name=$_POST['nom'];
	$firstname=$_POST['']
}

?>
$mysqli = new mysqli('localhost','maysa','pass123','wapi') or die (mysql_error($mysqli));

if (isset($_POST['save']))
{
	$nom =$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mysqli->query("INSERT INTO livreur (Nom, Prenom) VALUES ('$nom', '$prenom')") or die ($mysqli->error);


}