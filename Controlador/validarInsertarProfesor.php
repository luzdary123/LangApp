<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Profesor.php";
//Creamos el objeto Profesor
$objProfesor= new Profesor();
$objProfesor->CrearProfesor($_REQUEST['identification'],$_REQUEST['name'],$_REQUEST['lastname'],$_REQUEST['address'],$_REQUEST['phone']);

$resultado = $objProfesor->agregarProfesor();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarProfesor&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarProfesor&msj=2");

?>



