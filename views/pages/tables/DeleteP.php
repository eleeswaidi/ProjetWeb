<?php 
include "../../../core/crud.php";
$p=new Crud();
if(isset($_GET['idp']))
{
$p->supprimerProduit($_GET['idp']);

echo "<script language=\"javascript\">alert(\"Product has been deleted successfully\");document.location.href='affichageListeProduit.php';</script>";
}
?>