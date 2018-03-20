<?php
require_once("claseAlumno.php");

$arraytest= array (10,8,30);
$arraytest[]=1000;
$arraytest["Apellido"]="Lopez";
$arraytest["Zlumno"]= new Alumno();
$arraytest[]= new Alumno();
$arraytest[]= "A";
$arraytest[33]= "Z";
$arraytest[10]= "B";

krsort($arraytest);

var_dump($arraytest);

?>