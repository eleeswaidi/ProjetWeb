
<?PHP
include "../config.php";
class adminC{
function afficheradmin ($admin){
  echo "numero cin:".$admin->getcin()."<br>";
  echo "login:".$admin->getLogin()."<br>";
  echo "nom:".$admin->getNom()."<br>";
  echo "login:".$admin->getPrenom()."<br>";
  echo "login:".$admin->getTel()."<br>";
  echo "login:".$admin->getlieu()."<br>";
  echo "login:".$admin->getEmail()."<br>";
  echo "mdp:".$admin->getMdp()."<br>";
}
function ajouteradmin($admin){
  $sql="INSERT INTO admin (cin,login,nom,prenom,tel,lieu,email,mdp) VALUES (:cin, :login, :nom, :prenom, :tel, :lieu, :email, :mdp)";
  $db = config::getConnexion();
  try{
      $req=$db->prepare($sql);
      $cin=$admin->getcin();
      $login=$admin->getLogin();
      $nom=$admin->getNom();
      $prenom=$admin->getPrenom();
      $tel=$admin->getTel();
      $lieu=$admin->getlieu();
      $email=$admin->getEmail();
      $mdp=$admin->getMdp();
  $req->bindValue(':cin',$cin);
  $req->bindValue(':login',$login);
  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':tel',$tel);
  $req->bindValue(':lieu',$lieu);
  $req->bindValue(':email',$email);
  $req->bindvalue(':mdp',$mdp);

          $req->execute();

      }
      catch (Exception $e){
          echo 'Erreur: '.$e->getMessage();
      }




}

function afficheradmins(){
  //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
  $sql="SElECT * From admin";
  $db = config::getConnexion();
  try{
  $liste=$db->query($sql);
  return $liste;
  }
      catch (Exception $e){
          die('Erreur: '.$e->getMessage());
      }
}

function supprimeradmin($cin){
  $sql="DELETE FROM admin where cin= :cin";
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

function modifieradmin($admin,$cin){

  $sql="UPDATE admin SET cin=:cin ,login=:login, nom=:nom, prenom=:prenom, tel=:tel, lieu=:lieu, email=:emaiadmin, mdp=:mdp WHERE cin=:cinn";

  $db = config::getConnexion();
  //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
      $req=$db->prepare($sql);
 $cinn=$admin->getcin();
  $loginn=$admin->getLogin();
      $nom=$admin->getNom();
      $prenom=$admin->getPrenom();
      $lieu=$admin->getlieu();
      $email=$admin->getEmail();
      $mdp=$admin->getMdp();
      $_SESSION["psw"] = $mdp;
  $req->bindValue(':cin',$cinn);
  $req->bindValue(':cinn',$cinn);
  $req->bindValue(':login',$loginn);
  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':tel',$admin->getTel());
  $req->bindValue(':adresse',$lieu);
  $req->bindValue(':email',$email);
  $req->bindValue(':mdp',$mdp);


          $s=$req->execute();

         // header('Location: index.php');
      }
      catch (Exception $e){
          echo " Erreur ! ".$e->getMessage();
 echo " Les datas : " ;
      }

}

function recupereradmin($cin){
  $sql="SELECT * from admin where cin=$cin";
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
