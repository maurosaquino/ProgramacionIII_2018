<?php

require_once("claseAlumno.php"); //o include es algo que incluis, el require lo pide si o si si no fatal error

for ($i=0; $i < 10; $i++) { 
	
	include("repetidor.php");

}

$Nombre = "Jose";
$Sueldo = 10.333;


echo "Hola Mundo <br>";

printf("Sueldo:%f<br>",$Sueldo);
printf("Nombre:%s<br>",$Nombre);

$miArray = array(1,2,3,4,5);
$segundoArray[33]="Hola";
$segundoArray[]="Chau"; 
$segundoArray["Maria"]="Jose"; 

$tercerArray = array('Legajo' => 19, 'Legaja'=> 18 );

var_dump($miArray);

echo "<br>";

var_dump($segundoArray);

echo "<br>";

var_dump($tercerArray);


echo "<br>";

$alumno = new Alumno();

$alumno->nombre = "Pepe";
$alumno->legajo = "666";
$alumno->mail   = "No tengo";

$otro = $alumno; //misma posicion de memoria RAM

$otro->nombre="Juan";

var_dump($alumno);



?>