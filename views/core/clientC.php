
<?PHP
include "../config.php";
class clientC{
function afficherclient ($client){
  echo "numero cin:".$client->getcin()."<br>";
  echo "login:".$client->getLogin()."<br>";
  echo "nom:".$client->getNom()."<br>";
  echo "login:".$client->getPrenom()."<br>";
  echo "login:".$client->getTel()."<br>";
  echo "login:".$client->getAdresse()."<br>";
  echo "login:".$client->getEmail()."<br>";
  echo "login:".$client->getCodepostal()."<br>";
  echo "mdp:".$client->getMdp()."<br>";
}
function ajouterclient($client){
  $sql="INSERT INTO client (cin,login,nom,prenom,tel,adresse,email,code_postal,mdp) VALUES (:cin, :login, :nom, :prenom, :tel, :adresse, :email , :code_postal, :mdp)";
  $db = config::getConnexion();
  try{
      $req=$db->prepare($sql);
      $cin=$client->getcin();
      $login=$client->getLogin();
      $nom=$client->getNom();
      $prenom=$client->getPrenom();
      $tel=$client->getTel();
      $adresse=$client->getAdresse();
      $email=$client->getEmail();
      $cp=$client->getCodepostal();
      $mdp=$client->getMdp();
  $req->bindValue(':cin',$cin);
  $req->bindValue(':login',$login);
  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':tel',$tel);
  $req->bindValue(':adresse',$adresse);
  $req->bindValue(':email',$email);
  $req->bindValue(':code_postal',$cp);
  $req->bindvalue(':mdp',$mdp);

          $req->execute();

      }
      catch (Exception $e){
          echo 'Erreur: '.$e->getMessage();
      }




}

function afficherClients(){
  //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
  $sql="SElECT * From client";
  $db = config::getConnexion();
  try{
  $liste=$db->query($sql);
  return $liste;
  }
      catch (Exception $e){
          die('Erreur: '.$e->getMessage());
      }
}

function supprimerclient($cin){
  $sql="DELETE FROM client where cin= :cin";
  $db = config::getConnexion();
      $req=$db->prepare($sql);
  $req->bindValue(':cin',$cin);
  try{
          $req->execute();
         // header('Location: index.php');
      }
      catch (Exception $e){
          die('Erreur: '.$e->getMessage());
      }
}

function modifierclient($client,$cin){

  $sql="UPDATE client SET cin=:cin ,login=:login, nom=:nom, prenom=:prenom, tel=:tel, adresse=:adresse, email=:email, code_postal=:code_postal, mdp=:mdp WHERE cin=:cinn";

  $db = config::getConnexion();
  //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
      $req=$db->prepare($sql);
 $cinn=$client->getcin();
  $loginn=$client->getLogin();
      $nom=$client->getNom();
      $prenom=$client->getPrenom();
      $adresse=$client->getAdresse();
      $email=$client->getEmail();
      $codepostal=$client->getCodepostal();
      $mdp=$client->getMdp();
      $_SESSION["psw"] = $mdp;
  $req->bindValue(':cin',$cinn);
  $req->bindValue(':cinn',$cinn);
  $req->bindValue(':login',$loginn);
  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':tel',$client->getTel());
  $req->bindValue(':adresse',$adresse);
  $req->bindValue(':email',$email);
  $req->bindValue(':code_postal',$codepostal);
  $req->bindValue(':mdp',$mdp);


          $s=$req->execute();

         // header('Location: index.php');
      }
      catch (Exception $e){
          echo " Erreur ! ".$e->getMessage();
 echo " Les datas : " ;
      }

}

function recupererEmploye($cin){
  $sql="SELECT * from client where cin=$cin";
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
