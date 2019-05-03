<?PHP
include "livraisonCC.php";
$Livraison1C=new livraisonC();
$listeLivraisons=$Livraison1C->afficherLivraisons();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>destination</td>
<td>date debut</td>
<td>date fin</td>
<td>idclient</td>
<td>idarticle</td>

</tr>

<?PHP
foreach($listeLivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['Idlivraison']; ?></td>
	<td><?PHP echo $row['Destination']; ?></td>
	<td><?PHP echo $row['Date-debut']; ?></td>
	<td><?PHP echo $row['Date-fin']; ?></td>
	<td><?PHP echo $row['Id-client']; ?></td>
		<td><?PHP echo $row['titre']; ?></td>
	<td><form method="POST" action="supprimerLivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Idlivraison']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierLivraison.php?cin=<?PHP echo $row['Idlivraison']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


