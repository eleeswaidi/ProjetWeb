<?PHP
include "livreur.php";
include "livreurC.php";
$livreur=new livreur(75757575,10111001,'BEN Ahmed','Salah',150424,12/03/1998);
$livreurC=new LivreurC();
$livreurC->afficherLivreur($livreur);
echo "****************";
echo "<br>";
echo "cin:".$livreur->getCin();
echo "<br>";
echo "nom:".$livreur->getNom();
echo "<br>";
echo "prenom:".$livreur->getPrenom();
echo "<br>";
echo "daten:".$livreur->getdaten();
echo "<br>";
echo "id:".$livreur->getid();
echo "<br>";



?>