<?php 
include "../../../entity/produit.php";
include '../../../core/crud.php';
$c=new Crud();
if((isset($_GET['np']))&&(isset($_GET['pp']))&&(isset($_GET['pr']))){
	$c->modifierProduit($_GET['idp'],$_GET['np'],$_GET['pr'],$_GET['pp'],$_GET['type']);
	echo "<script language=\"javascript\">alert(\"Product has been updated successfully\");document.location.href='http://localhost/projet/views/pages/tables/affichageListeProduit.php';</script>";
}
?>