<?php 


class direccion implements Imostrable{

	
	private $calle;
	private $altura;
	private $localidad;


	function __construct($n,$a,$d){

		$this->calle=$n;
		$this->altura=$a;
		$this->localidad=$d;


	}

	public function setcalle($n){

		$this->calle = $n;
	}

	public function setaltura($n){

		$this->altura = $n;
	}

	public function setlocalidad($n){

		$this->localidad = $n;
	}

	public function getcalle(){

		return $this->calle;
	}

	public function getaltura(){

		return $this->altura;
	}

	public function getlocalidad(){

		return $this->localidad;
	}

	public function mostrarHTML(){

		return '<h1>DIRECCION</h1>
			  <p>Calle:'.$this->calle.'</p>
			  <p>Altura:'.$this->altura.'</p>'
			  .$this->localidad->mostrarHTML();

	}
}




 ?>