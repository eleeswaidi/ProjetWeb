<?PHP
include "livreurC.php";
$Livreur1C=new livreurC();
$listeLivreurs=$Livreur1C->afficherLivreurs();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>nb heures</td>
<td>tarif horaire</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeLivreurs as $row){
	?>
	<tr>
	<td><?PHP echo $row['Idlivreur']; ?></td>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Prenom']; ?></td>
	<td><?PHP echo $row['CIN']; ?></td>
	<td><?PHP echo $row['vehicule']; ?></td>
		<td><?PHP echo $row['Datedenaissance']; ?></td>
	<td><form method="POST" action="supprimerLivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Idlivreur']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierLivreur.php?cin=<?PHP echo $row['Idlivreur']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


