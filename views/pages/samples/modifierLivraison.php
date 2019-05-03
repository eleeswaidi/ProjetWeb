<HTML>
<head>
</head>
<body>
<?PHP
include "livraison.php";
include "livraisonCC.php";

echo $_GET['Idlivraison'];
if (isset($_GET['Idlivraison'])){
	$livraisonC=new LivraisonC();
    $result=$livraisonC->recupererLivraison($_GET['Idlivraison']);
	foreach($result as $row){
		$id=$row['Idlivraison'];
		$destination=$row['Destination'];
		$dated=$row['Date-debut'];
		$datef=$row['Date-fin'];
		$idclient=$row['Idclient'];
		$idarticle=$row['titre'];
	}
}
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="destination" value="<?PHP echo $destination ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="date" name="dated" value="<?PHP echo $dated ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="date" name="datef" value="<?PHP echo $datef ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="text" name="" value="<?PHP echo $tarifH ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?php
if (isset($_POST['modifier'])){
	$livraison=new livraisonC($_POST['id'], $_POST['dated'],$_POST['datef'],$_POST['destination'],$_POST['idclient'],$_POST['idarticle']);
	$livraisonC->modifierLivraison($livraison,$_POST['id']);
header('Location: livraisonn.php');
}
?>
</body>
</HTMl>