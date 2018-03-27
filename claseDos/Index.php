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

$lanus      = new localidad('1824','Lanus');
$avellaneda = new localidad('1312','Avellaneda');
$quilmes    = new localidad('4444','Quilmes');


$direccion = new direccion('Suipacha','2050',$lanus);

$array[] =  new alumno('Mauro','Gutierrez','12312344', $direccion,'123','21/06/2008');
$array[] =  new profesor('Pedro','Carlos','312344', new direccion('Suipacha','2050',$lanus), array ('lengua','matematica'),array('sabado','domingo'));
$array[] =  new alumno('Juan','Carlos','12312344', $direccion,'123','21/06/2008');
$array[] =  new profesor('Sebastian','Martinez','332425', new direccion('Mitre','1322',$avellaneda), array ('lab 2','contabilidad','inv operativa'),array('martes','jueves','miercoles'));
$array[] =  new alumno('Ramiro','Carlos','12312344', $direccion,'123','21/06/2008');
$array[] =  new profesor('Martin','Alameda','343378', new direccion('Pasaje Mocho','44444',$quilmes), array ('lab 3','prog3','pps'),array('lunes','martes','miercoles'));

foreach($array as $universidad){

	$universidad->mostrarHTML();
}

?>