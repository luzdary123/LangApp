<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Profesor.php";
//Creamos el objeto profesor
$objProfesor= new Profesor();
$objProfesor->actualizarProfesor($_REQUEST['identification'],$_REQUEST['name'],
$_REQUEST['lastname'],$_REQUEST['address'],$_REQUEST['phone'] );


$resultado = $objProfesor->modificarProfesor();
$result = $objProfesor->consultarProfesor($_REQUEST['identification']);
$row = $result->fetch_array(MYSQLI_ASSOC);


if ($row)
	if ($resultado)
		header ("location:../Vista/index2.php?pag=actualizarProfesor&msj=1");
	else
		header ("location:../Vista/index2.php?pag=actualizarProfesor&msj=2");
else
	header ("location:../Vista/index2.php?pag=actualizarProfesor&msj=3&identification=".$_REQUEST['identification']);	
?>





