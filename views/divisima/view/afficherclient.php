<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<?PHP
include "../core/clientC.php";
$client1C=new clientC();
$listeclients=$client1C->afficherclients();
?>


<table border="1" id="customers">
<tr>
<th>cin</th>
<th>login</th>
<th>Nom</th>
<th>Prenom</th>
<th>tel</th>
<th>adresse</th>
<th>email</th>
<th>code_postal</th>
<th>mdp</th>
<th>supprimer</th>
</tr>

<?PHP
foreach($listeclients as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['login']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
  <td><?PHP echo $row['code_postal']; ?></td>
	<td><?PHP echo $row['mdp']; ?></td>
	<td><form method="POST" action="supprimerclient.php">
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
</body>
</html
