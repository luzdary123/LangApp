<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Estudiante.php";
//Creamos el objeto Estudiante
$objEstudiante= new Estudiante();
$objEstudiante->CrearEstudiante($_REQUEST['identification'],$_REQUEST['name'],$_REQUEST['lastname'],$_REQUEST['address'],$_REQUEST['phone'],$_REQUEST['level']);

$resultado = $objEstudiante->agregarEstudiante();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarEstudiante&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarEstudiante&msj=2");

?>



