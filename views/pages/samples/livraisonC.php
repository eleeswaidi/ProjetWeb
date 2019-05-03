<?PHP
include "config.php";
class LivraisonC {
function afficherLivraison ($livraison){


		echo "Id_livraison: ".$livraison->getid()."<br>";
		echo "Destination: ".$livraison->getdestination()."<br>";
		echo "Date début: ".$livraison->getdated()."<br>";
		echo "Date fin: ".$livraison->getdatef()."<br>";
		echo "id-client: ".$livraison->getidclient()."<br>";
	    echo "id-article: ".$livraison->getidarticle()."<br>";

	}
	//function calculerSalaire($livreur){
		//echo $employe->getNbHeures() * $employe->getTarifHoraire();
	//}
	function ajouterLivraison($livraison){
		$sql="insert into livraison values (:id, :destination,:dated,:datef,:idclient,:idarticle)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		 $id=$livraison->getid();

        $destination=$livraison->getdestination();
        $dated=$livraison->getdated();
        $datef=$livraison->getdatef();
        $idclient=$livraison->getidclient();
        $idarticle=$livraison->getidarticle();
        $req->bindValue(':id',$id);
		$req->bindValue(':destination',$destination);
		$req->bindValue(':dated',$dated);
		$req->bindValue(':datef',$datef);
		$req->bindValue(':idclient',$idclient);
		$req->bindValue(':idarticle',$idarticle);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraisons(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivraison($id){
		$sql="DELETE FROM Livraison where Idlivraison= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivraison($livreur,$id){
		$sql="UPDATE livraison SET  Destination= :destination, Date-debut=':dated', Date-fin = :datef, Id-client =:idclient, Id-article =:id-article WHERE Idlivraison= :id ");
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id=$livraison->getid();

	 $destination=$livraison->getdestination();
        $dated=$livraison->getdated();
        $datef=$livraison->getdatef();
        $idclient=$livraison->getidclient();
        $idarticle=$livraison->getidarticle();
        $req->bindValue(':id',$id);
		$req->bindValue(':destination',$destination);
		$req->bindValue(':dated',$dated);
		$req->bindValue(':datef',$datef);
		$req->bindValue(':idclient',$idclient);
		$req->bindValue(':idarticle',$idarticle);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivraison($id){
		$sql="SELECT * from livraison where Idlivraison=:id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
        		$liste->bindValue(':id',$id);

		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeLivraison($id){
		$sql="SELECT * from livraison where Idlivraison=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>