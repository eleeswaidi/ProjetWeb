<?php
include_once("C:\wamp64\www\projet\core\crud.php");

require('C:\wamp64\www\projet\core\fpdf\fpdf.php');
$PRODUIT1C=new Crud();
$listeproduits=$PRODUIT1C->AfficherProduit();




// Instanciation of inherited class
$pdf=new FPDF("P","mm","A4");
$pdf->AddPage();
//Entête
$pdf->SetFillColor(133, 6, 6);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont("Arial","B",25);
$pdf->Cell(130,10,"Wapi\n",0,0,"",1);
$pdf->Cell(59,10,"Liste produits",0,1,"R",1);

//Espace
$pdf->Cell(0,10,"",0,1);

//Adresse+logo
$pdf->SetTextColor(0, 0, 0);
$url=("C:\Users/elee\Documents\GitHub\ProjetWeb/views\divisima\img\logo.png");
$pdf->SetFont("Arial","",11);
$pdf->Cell(130,5,"Avenue taher haded",0,1);
$pdf->Cell(130,5,"Ariana Sogra",0,1);
$pdf->Cell(130,5,"Tel:  (+216) 79 490 110",0,1);
$pdf->Image($url,158,28,40,40);
$header = array('Nom', 'Type', 'Prix');
  $pdf->Cell(0,30,"",0,1);
  foreach($header as $col)
        $pdf->Cell(30,7,$col,1);
      $pdf->Ln();
foreach($listeproduits as $row)
{

$n=$row['nomprod'];
$q=$row['type'];
$a=$row['prix'];

$pdf->Cell(30,10,$n,1);
$pdf->Cell(30,10,$q,1);
$pdf->Cell(30,10,$a,1);

$pdf->Ln();


}

$pdf->Output()?>
