<?php
class Produit
{

private $idprod;
private $prix;
private $pourcentagereduction;
private $nomprod;
private $type;


    public function __construct($idprod, $nomprod, $pourcentagereduction, $prix,$type)
    {
        $this->idprod = $idprod;
        $this->nomprod = $nomprod;
        $this->pourcentagereduction = $pourcentagereduction;
        $this->prix = $prix;
        $this->type = $type;
    }


    
    public function getIdProd()
    {
        return $this->idprod;
    }


    public function setIdProd($idprod)
    {
        $this->idprod= $idprod;
    }
   public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type= $type;
    }



      public function getNomProd()
    {
        return $this->NomProd;
    }


    public function setNomProd($NomProd)
    {
        $this->nomprod = $NomProd;
    }
    
         public function getPrix()
    {
        return $this->Prix;
    }


    public function setPrix($Prix)
    {
        $this->prix = $Prix;
    }


      public function getPoucentageReduction()
    {
        return $this->poucentagereduction;
    }


    public function setPoucentageReduction($poucentagereduction)
    {
        $this->poucentagereduction = $poucentagereduction;
    }







}
?>