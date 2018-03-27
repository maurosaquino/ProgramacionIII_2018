<?php  

class localidad implements Imostrable{

	private $codigopostal;
	private $nombre;


	function __construct($n,$a){

		$this->codigopostal=$n;
		$this->nombre=$a;
		

	}

	public function setCodigopostal($n){

		$this->codigopostal = $n;
	}

	public function setNombre($n){

		$this->nombre = $n;
	}


	public function getCodigopostal($n){

		return $this->codigopostal;
	}

	public function getNombre($n){

		return $this->nombre;
	}

	public function mostrarHTML(){

		return '<h1>LOCALIDAD</h1>
			  <p>Codigo Postal:'.$this->codigopostal.'</p>
			  <p>Nombre:'.$this->nombre.'</p>';

	}

}

?>