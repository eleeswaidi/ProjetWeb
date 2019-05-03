<?PHP
include "config.php";
class LivreurC {
function afficherLivreur ($livreur){


		echo "Id_livreur: ".$livreur->getid()."<br>";
		echo "Nom: ".$livreur->getNom()."<br>";
		echo "Prenom: ".$livreur->getPrenom()."<br>";
		echo "cin: ".$livreur->getCin()."<br>";
		echo "vehicule: ".$livreur->getvehicule()."<br>";
	    echo "Date de naissance: ".$livreur->getdaten()."<br>";

	}
	//function calculerSalaire($livreur){
		//echo $employe->getNbHeures() * $employe->getTarifHoraire();
	//}
	function ajouterLivreur($livreur){
		$sql="insert into livreur values (:id, :nom,:prenom,:cin,:daten,:vehicule)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		// $id=$livreur->getid();

        $cin=$livreur->getCin();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $vehicule=$livreur->getvehicule();
        $daten=$livreur->getdaten();
        $req->bindValue(':id',NULl);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':vehicule',$vehicule);
		$req->bindValue(':daten',$daten);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivreurs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivreur($id){
		$sql="DELETE FROM livreur where Idlivreur= :id";
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
	function modifierLivreur($livreur){
		$sql="UPDATE Livreur SET CIN=:cin, Nom=:nom, Prenom=:prenom, vehicule=:vehicule, Datedenaissance =:daten WHERE Idlivreur=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id=$livreur->getid();
		$cin=$livreur->getCin();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $vehicule=$livreur->getvehicule();
        $daten=$livreur->getdaten();
		//$datas = array(':id '=>$id , ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':daten'=>$daten,':vehicule'=>$vehicule);
		$req->bindValue(':id',$id);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':vehicule',$vehicule);
		$req->bindValue(':daten',$daten);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function recupererLivreur($id){
		$sql="SELECT * from livreur where Idlivreur = $id";
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
	
	function rechercherListeLivreur($veh){
		$sql="SELECT * from livreur where vehicule=$veh";
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