<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Asignar a $sql el texto de la Consulta
$sql="insert into categories (Name) values ('$_REQUEST[name]')";


$resultado=$objConexion->query($sql);

if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarCategoria&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarCategoria&msj=2");

?>





