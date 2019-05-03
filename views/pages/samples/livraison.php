<?PHP
class livraison{
	private $id;
	private $destination;
	private $dated;
	private $datef;
	private $idclient;
    private $idarticle;

	function __construct($id,$destination,$dated,$datef,$idclient,$idarticle)
	{
		$this->id=$id;
		$this->destination=$destination;
		$this->dated=$dated;
		$this->datef=$datef;
		$this->idclient=$idclient;
		$this->idarticle=$idarticle;
	}
	function getid(){
		return $this->id;
	}
	
	function getdestination(){
		return $this->destination;
	}
	function getdated(){
		return $this->dated;
	}
	function getdatef(){
		return $this->datef;
	}
	function getidclient(){
		return $this->idclient;
	}
	function getidarticle(){
		return $this->idarticle;
	}

	
}

?>