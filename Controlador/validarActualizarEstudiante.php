<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Estudiante.php";
//Creamos el objeto estudiante
$objEstudiante= new Estudiante();
$objEstudiante->actualizarEstudiante($_REQUEST['identification'],$_REQUEST['name'],
$_REQUEST['lastname'],$_REQUEST['address'],$_REQUEST['phone'],$_REQUEST['level'] );


$resultado = $objEstudiante->modificarEstudiante();
$result = $objEstudiante->consultarEstudiante($_REQUEST['identification']);
$row = $result->fetch_array(MYSQLI_ASSOC);


if ($row)
	if ($resultado)
		header header ("location:../Vista/index2.php?pag=actualizarEstudiante&msj=1");
	else
		header ("location:../Vista/index2.php?pag=actualizarEstudiante&msj=2");
else
	header ("location:../Vista/index2.php?pag=actualizarEstudiante&msj=3&identification=".$_REQUEST['identification']);
?>












