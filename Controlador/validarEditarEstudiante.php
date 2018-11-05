<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Estudiante.php";
//Creamos el objeto estud
$objEstudiante= new Estudiante();
$objEstudiante->crearEstudiante($_REQUEST['identification'],
                        $_REQUEST['name'],
                        $_REQUEST['lastname'],
                        $_REQUEST['address'],
                        $_REQUEST['phone'],
                        $_REQUEST['level']);
                        

$resultado = $objEstudiante->guardarEditarEstudiante();
if ($resultado){
    //header ("location: ../vista/index2.php?pag=listarEstudiantesTabla");
    echo "<script>alert('Editado Correctamente!'); location.href='../vista/index2.php?pag=listarEstudiantesTabla'</script>";
    //header ("location: ../vista/index2.php?pag=listarEstudianteTabla");
}else{
    echo "<script>alert('Error el editar!');location.href='../vista/index2.php?pag=listarEstudiantesTabla'</script>";
    //header ("location: ../vista/index2.php?pag=listarEstudianteTabla");
}
?>







