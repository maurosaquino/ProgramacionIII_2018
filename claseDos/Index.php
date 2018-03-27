<!DOCTYPE html>
<html>
<head>
	<title>Programacion III  - 2018 - Clase dos</title>
</head>
<body>

</body>
</html>

<?php 
require_once('./Entidades/alumno.php');
require_once('./Entidades/profesor.php');
require_once('./Entidades/direccion.php');
require_once('./Entidades/localidad.php');

$materias = array('matematica','lengua');
$dias     = array('lunes','martes');

$localidad = new localidad('1824','Lanus');

$direccion = new direccion('Suipacha','2050',$localidad);

$alumno   = new alumno('Juan','Carlos','12312344', $direccion,'123','21/06/2008');

$profesor   = new profesor('Pedro','Carlos','312344', $direccion,$materias,$dias);

$alumno->mostrarHTML();
$profesor->mostrarHTML();