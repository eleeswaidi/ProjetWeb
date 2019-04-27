<?php
include "C:\wamp64\www\projet\config.php";
class Crud
{

  function nbrTyp($type){
       $sql="SELECT count(*) from stock where type='$type'";
        $db = config::getConnexion();
        $liste=$db->query($sql);
        return $liste;
      
    }


public static function checkloginC($email,$pw)
{
    $db = config::getConnexion(); //appel fonction static sans new
    $req = $db->prepare('SELECT * FROM user WHERE email =:email AND mdp =:pw');
    $req->bindParam(':email', $email);
    $req->bindParam(':pw', $pw);
    $req->execute();
    $resultat=$req->fetch();
    return $resultat;

}


  function statisticnbrtype(){
       $sql="SELECT count(*) as nbr,type from produit group by type";
        $db = config::getConnexion();
        $liste=$db->query($sql);
        return $liste;
      
    }


    function recetat(){
       $sql="SELECT * from stock where etat=0";
        $db = config::getConnexion();
        $liste=$db->query($sql);
        return $liste;
      
    }


    public function ajoutProduit($P,$c,$k,$t,$img)
    {
    	$ch="http:\\localhost\projet\views\images\produit";
       
        $db = config::getConnexion(); //appel fonction static sans new
        $sql = "INSERT INTO `produit`(`prix`, `poucentagereduction`, `nomprod`, `type` , `image`) VALUES (:prix,:poucentagereduction,:nomprod,:type,:image)";
        $req=$db->prepare($sql);
        $req->bindValue(":prix", $k);
        $req->bindValue(":poucentagereduction", $c);
        $req->bindValue(":nomprod", $P);
        $req->bindValue(":type", $t);
        $req->bindValue(":image", $img);
        $req->execute();
   	
    	$sql2 = "UPDATE `stock` SET qte=qte+1 WHERE type=:type";
    	$req2=$db->prepare($sql2);
        $req2->bindValue(":type", $t);
        $req2->execute();

    }

      public function ajoutType($t)
    {
       
        $db = config::getConnexion(); //appel fonction static sans new
        $sql = "INSERT INTO `stock`(`qte`,`type`) VALUES (:qte,:type)";
        $req=$db->prepare($sql);
        $req->bindValue(":qte", 0);
        $req->bindValue(":type", $t);
        $req->execute();
    }

       public function delRec($idp)
    {
       
        $db = config::getConnexion(); //appel fonction static sans new
        $sql = "UPDATE `stock` SET etat=1 where idstock=$idp";
        $req=$db->prepare($sql);
        
        $req->execute();
    }

    	

    	 public function modifierProduit($idp,$p,$c,$k,$t)
    {
        $db = config::getConnexion(); 
        $sql ="UPDATE `produit` SET prix=:prix,poucentagereduction=:poucentagereduction,nomprod=:nomprod,type=:type WHERE idprod=:idprod";

        $req=$db->prepare($sql);
        $req->bindValue(':prix',$k);
        $req->bindValue(':poucentagereduction',$c);
        $req->bindValue(':nomprod',$p);
        $req->bindValue(':idprod',$idp);
        $req->bindValue(':type',$t);
            $req->execute(); 
    }

       
        function supprimerProduit($id){
        $sql="DELETE FROM produit where idprod=:idprod";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idprod',$id);
        
            $req->execute();
      
    }

          function supprimerType($type)
          {
        $sql="DELETE FROM stock where type=:type";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':type',$type);
        
            $req->execute();

     	$sql1="DELETE FROM produit where type=:type";
        $db=config::getConnexion();
        $req1=$db->prepare($sql1);
        $req1->bindValue(':type',$type);
        
            $req1->execute();
    }


        public function AfficherProduit()
{
    $db = config::getConnexion();
    $sql = "SELECT * FROM produit";
    $result = $db->query($sql); /*query pour la lecture seulement */
    return $result;
}

        public function Afficherstock()
{
    $db = config::getConnexion();
    $sql = "SELECT * FROM stock";
    $result = $db->query($sql); /*query pour la lecture seulement */
    return $result;
}
        public function rechercherProd($mot)
{
    $db = config::getConnexion();
    $sql = "SELECT * FROM produit where nomprod LIKE '%$mot%' OR prix LIKE '%$mot%'";
    $result = $db->query($sql); /*query pour la lecture seulement */
    return $result;
}
 public function getProduit($id){
        $sql="SELECT * from produit where idprod=$id";
        $db = config::getConnexion();
        $liste=$db->query($sql);
        return $liste;
         } 


         public function getcountnote(){
        $sql="SELECT count(*) from stock where etat = 0";
        $db = config::getConnexion();
        $liste=$db->query($sql);
        return $liste;
         } 

}

?>