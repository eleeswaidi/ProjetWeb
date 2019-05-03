<?PHP
class admin{
    private $cin;
    private $login;
    public $nom;
    private $prenom;
    private $tel;
    private $lieu;
    public $email;
    private $mdp;

    function __construct($cin,$login,$nom,$prenom,$tel,$lieu,$mail,$mdp){
        $this->cin=$cin;
        $this->login=$login;
        $this->nom=$nom;
        $this->prenom=$prenom;

        $this->tel=$tel;
        $this->lieu=$lieu;
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

    function getlieu(){
        return $this->lieu;
    }

    function getEmail()
    {
        return $this->email;
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

    function setlieu($lieu){
		$this->adresse=$lieu;
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
