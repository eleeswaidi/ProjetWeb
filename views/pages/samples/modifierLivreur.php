<HTML>
<head>
</head>
<body>
<?PHP
session_start();
include "livreur.php";
include "livreurC.php";
$_SESSION['id'] = "2";
if (isset($_SESSION['id'])){
	$livreurC=new LivreurC();
    $result=$livreurC->recupererLivreur($_SESSION['id']);
	foreach($result as $row){
		$id=$row['Idlivreur'];
		$cin=$row['CIN'];
		$nom=$row['Nom'];
		$prenom=$row['Prenom'];
		$vehicule=$row['vehicule'];
		$daten=$row['Datedenaissance'];
		}
}
?>
<form method="POST">
<table>
<caption>Modifier Livreur</caption>
<tr>
<td>Id</td>
<td><input type="number" name="id" value="<?PHP echo $Idlivreur ?>"></td>
</tr>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $CIN ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $Nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $Prenom ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="text" name="vehicule" value="<?PHP echo $vehicule ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="date" name="daten" value="<?PHP echo $Datedenaissance ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value=""></td>

</tr>
</table>
</form>
<?php
	
if (isset($_POST['modifier'])){
	$livreur=new livreur($_SESSION['id'], $_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['vehicule'],$_POST['daten']);
	$livreurC->modifierLivreur($livreur);
	header('Location: livreurr.php');
}
?>
</body>
</HTMl>