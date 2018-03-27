<?php 

include ('Imostrable.php');

class persona implements Imostrable{


	private $nombre;
	private $apellido;
	private $dni;
	private $direccion;


	function __construct($n,$a,$d,$dir){

		$this->nombre=$n;
		$this->apellido=$a;
		$this->dni=$d;
		$this->direccion = $dir;


	}

	public function setNombre($n){

		$this->nombre = $n;
	}

	public function setApellido($n){

		$this->apellido = $n;
	}

	public function setDni($n){

		$this->dni = $n;
	}

	public function setDireccion($n){

		$this->direccion = $n;
	}

	public function getNombre(){

		return $this->nombre;
	}

	public function getApellido(){

		return $this->apellido;
	}

	public function getDni(){

		return $this->dni;
	}

	public function getDireccion(){

		return $this->direccion;
	}

	public function mostrarHTML(){

		echo '<h1>PERSONA</h1>
			   <p>Nombre:'.$this->nombre.'</p>
			   <p>Apellido:'.$this->apellido.'</p>
			   <p>Dni'.$this->dni.'</p>'
			   .$this->direccion->mostrarHTML();

	}
}




 ?>