<?PHP
include "../core/adminC.php";
$admin1C=new adminC();
$listeadmins=$admin1C->afficheradmins();
?>


<table border="1">
<tr>
<td>cin</td>
<td>login</td>
<td>Nom</td>
<td>Prenom</td>
<td>tel</td>
<td>lieu</td>
<td>email</td>
<td>mdp</td>
<td>supprimer</td>
</tr>

<?PHP
foreach($listeadmins as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['login']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><?PHP echo $row['lieu']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['mdp']; ?></td>
	<td><form method="POST" action="supprimeradmin.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierEmploye.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
