<?php
include "C:\wamp64\www\projet\config.php";
class User
{

private $nom;
private $prenom;
private $email;
private $mdp;
    public function __construct($nom, $prenom, $email, $mdp)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        
    }

public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }


public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

 public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }


  public static function checklogin($email,$mdp)
{
    $db = config::getConnexion(); //appel fonction static sans new
    $req = $db->prepare('SELECT * FROM user WHERE email =:email AND mdp =:mdp');
    $req->bindParam(':email', $email);
    $req->bindParam(':mdp', $mdp);
    $req->execute();
    $resultat=$req->fetch();
    return $resultat;

}
}
?>