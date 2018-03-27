<?php

include_once('persona.php');

class alumno extends persona {

	private $legajo;
	private $fechainscripcion;

	function __construct($n,$a,$d,$dir,$l,$fi){

		$this->legajo=$l;
		$this->fechainscripcion=$fi;
		parent::__construct($n,$a,$d,$dir);
		

	}

	public function setlegajo($n){

		$this->legajo = $n;
	}

	public function setfechainscripcion($n){

		$this->fechainscripcion = $n;
	}

	public function getlegajo(){

		return $this->legajo;
	}

	public function getfechainscripcion(){

		return $this->fechainscripcion;
	}

		public function setNombre($n){

		parent::setnombre($n);
	}

	public function setapellido($n){

		parent::setapellido($n);
	}

	public function setdni($n){

		parent::setdni($n);
	}

	public function setDireccion($n){

		parent::setdireccion($n);
	}

	public function getnombre(){

		return parent::getnombre();
	}

	public function getapellido(){

		return parent::getapellido();
	}

	public function getdni(){

		return parent::getdni();
	}

	public function getdireccion(){

		return parent::getdireccion();
	}

	public function mostrarHTML(){

		echo '<h1>ALUMNO</h1>
			   <p>Nombre:'.$this->getnombre().'</p>
			   <p>Apellido:'.$this->getapellido().'</p>
			   <p>Dni: '.$this->getdni().'</p>
			   <p>Legajo:'.$this->legajo.'</p>
			   <p>Fecha Inscripcion:'.$this->fechainscripcion.'</p>'
			   .parent::getdireccion()->mostrarHTML();

	}


}


?>