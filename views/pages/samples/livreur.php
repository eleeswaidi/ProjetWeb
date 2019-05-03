<?PHP
class livreur{
	private $id;
	private $cin;
	private $nom;
	private $prenom;
	private $vehicule;
    private $daten;

	function __construct($id,$cin,$nom,$prenom,$vehicule,$daten)
	{
		$this->id=$id;
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->vehicule=$vehicule;
		$this->daten=$daten;
	}
	function getid(){
		return $this->id;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getvehicule(){
		return $this->vehicule;
	}
	function getdaten(){
		return $this->daten;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setvehicule($vehicule){
		$this->vehicule=$vehicule;
	}
	function setdaten($daten){
		$this->daten=$daten;
	}
	function setid($id){
		$this->id =$id;
	}
	function setcin($cin){
		$this->cin=$cin;
	}
}

?>