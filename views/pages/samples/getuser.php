<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
//include "../../config.php";
$q = $_GET['q'];
$con = mysqli_connect('localhost','root','','projet');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"projet_web");
$sql="SELECT * FROM client WHERE prenom like '%".$q."%' or prenom like '%".$q."%' or email like '%".$q."%' or login like '%".$q."%' or cin like '%".$q."%'  order by prenom";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>cin</th>
<th>login</th>
<th>nom</th>
<th>prenom</th>
<th>tel</th>
<th>adresse</th>
<th>email</th>
<th>code_postal</th>
<th>mdp</th>
</tr>";
while($row = mysqli_fetch_array($result)) {

    echo "<tr>";
    echo "<td>" . $row['cin'] . "</td>";
    echo "<td>" . $row['login'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "<td>" . $row['tel'] . "</td>";
    echo "<td>" . $row['adresse'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['code_postal'] . "</td>";
    echo "<td>" . $row['mdp'] . "</td>";
}
echo "</tr>";
echo "</table>";
//mysqli_close($con);
mysqli_close($con);
?>
</body>
</html>
