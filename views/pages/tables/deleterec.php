<?php 
include "../../../core/crud.php";
$p=new Crud();
if(isset($_GET['kk']))
{
	echo($_GET['kk']);
$p->delRec($_GET['kk']);
echo "<script language=\"javascript\">alert(\"Product has been added successfully\");document.location.href='http://localhost/projet/views/pages/tables/affichageListeProduit.php';</script>";
}
?>