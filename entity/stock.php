<?php
class Stock
{

private $idstock;
private $qte;
private $type;



    public function __construct($idstock, $qte,$type)
    {
        $this->idstock = $idstock;
        $this->qte = $qte;
        $this->type = $type;
    }


    
    public function getIdStock()
    {
        return $this->idstock;
    }


    public function setIdStock($idstock)
    {
        $this->idstock= $idstock;
    }
   public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type= $type;
    }



      public function getQte()
    {
        return $this->qte;
    }


    public function setQte($qte)
    {
        $this->qte = $qte;
    }
    
      








}
?>