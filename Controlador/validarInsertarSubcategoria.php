<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Subcategoria.php";
//Creamos el objeto subcategoria
$objSubcategoria= new Subcategoria();
$objSubcategoria->CrearSubcategoria($_REQUEST['idsubcategory_category'],$_REQUEST['name']);

$resultado = $objSubcategoria->agregarSubcategoria();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarSubcategoria&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarSubcategoria&msj=2");

?>







