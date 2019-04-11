<?php 
include "../../../entity/produit.php";
include '../../../core/crud.php';
$c=new Crud();


	$c->ajoutType($_POST['type']);
	echo "<script language=\"javascript\">alert(\"Product has been added successfully\");document.location.href='http://localhost/projet/views/pages/tables/affichageListetype.php';</script>";

?>