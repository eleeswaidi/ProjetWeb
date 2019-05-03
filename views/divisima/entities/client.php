<?PHP
class client{
    private $cin;
    private $login;
    public $nom;
    private $prenom;
    private $tel;
    private $adresse;
    public $email;
    private $code_postal;
    private $mdp;

    function __construct($cin,$login,$nom,$prenom,$tel,$adr,$mail,$cp,$mdp){
        $this->cin=$cin;
        $this->login=$login;
        $this->nom=$nom;
        $this->prenom=$prenom;

        $this->tel=$tel;
        $this->adresse=$adr;
        $this->code_postal=$cp;
        $this->email=$mail;
        $this->mdp=$mdp;
    }
    function getcin(){
      return $this->cin;
    }

    function getLogin(){
        return $this->login;
    }

    function getNom(){
        return $this->nom;
    }



    function getPrenom(){
        return $this->prenom;
    }

    function getTel(){
        return $this->tel;
    }

    function getAdresse(){
        return $this->adresse;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getCodepostal(){
        return $this->code_postal;
    }

    function getMdp(){
      return $this->mdp;
    }

    function setcin($cin){
        $this->cin=$cin;
    }

function setlogin($log){
  $this->login=$log;
}

    function setNom($nom){
		$this->nom=$nom;
    }

    function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    function setTel($tel){
		$this->tel=$tel;
    }

    function setAdresse($adresse){
		$this->adresse=$adresse;
    }

    function setEmail($email){
		$this->email=$email;
    }

    function setCodepostal($code_postal){
		$this->code_postal=$code_postal;
    }

    function setMdp($mdp){
      $this->mdp=$mdp;
    }
}

?>
