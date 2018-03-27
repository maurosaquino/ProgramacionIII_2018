<?php  

include_once('persona.php');

class profesor extends persona{

	private $materias = array();
	private $dias = array();

	function __construct($n,$a,$d,$dir,$m,$dias){

		$this->materias=$m;
		$this->dias=$dias;
		parent::__construct($n,$a,$d,$dir);

	}


	public function setmaterias($n){

		$this->materias = $n;
	}

	public function setdias($n){

		$this->dias = $n;
	}

	public function getmaterias(){

		return $this->materias;
	}

	public function getdias(){

		return $this->dias;
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

		echo '<h1>PROFESOR</h1>
			   <p>Nombre:'.$this->getnombre().'</p>
			   <p>Apellido:'.$this->getapellido().'</p>
			   <p>Dni: '.$this->getdni().'</p>'
			   .parent::getdireccion()->mostrarHTML()
			   .'<h1>MATERIAS Y DIAS</h1>';

		foreach($this->materias as $materia){

			echo '<p>'.$materia.'</p>';
		}

		foreach($this->dias as $dia){

			echo '<p>'.$dia.'</p>';
		}


	}

}


?>