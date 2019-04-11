<?php 
include "../../../entity/produit.php";
include '../../../core/crud.php';
$c=new Crud();
$k=1;
if((isset($_POST['np']))&&(isset($_POST['pp']))&&(isset($_POST['pr']))){
	$c->ajoutProduit($_POST['np'],$_POST['pr'],$_POST['pp'],$_POST['type']);
	echo "<script language=\"javascript\">alert(\"Product has been added successfully\");document.location.href='http://localhost/projet/views/pages/tables/affichageListeProduit.php';</script>";
}
?>