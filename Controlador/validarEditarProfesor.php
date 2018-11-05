<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Profesor.php";
//Creamos el objeto Profesor
$objProfesor= new Profesor();
$objProfesor->crearProfesor($_REQUEST['identification'],
                        $_REQUEST['name'],
                        $_REQUEST['lastname'],
                        $_REQUEST['address'],
                        $_REQUEST['phone']);

$resultado = $objProfesor->guardarEditarProfesor();
if ($resultado){
    //header ("location: ../vista/index2.php?pag=listarProfesoresTabla");
     echo "<script>alert('Editado Correctamente!'); location.href='../vista/index2.php?pag=listarProfesoresTabla'</script>" ;
    //header ("location: ../vista/index2.php?pag=listarProfesorTabla");
}else{
     echo "<script>alert('Error el editar!');location.href='../vista/index2.php?pag=listarProfesoresTabla'</script>";
    //header ("location: ../vista/index2.php?pag=listarProfesorTabla");
}
?>





