<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Profesor.php";
$objProfesor=new Profesor();
$profesores=$objProfesor->consultarProfesores();
?>
<h1 align="center">LISTADO DE PROFESORES</h1>
<table width="100%" border="1" style="border-collapse: collapse">
  <tr  bgcolor="#33FFE0" class="texto" align="center">
    <td>Identification</td>
    <td>Name</td>
    <td>LastName</td>
    <td>Address</td>
    <td>Phone</td>
    <td>Acciones</td>
  </tr>
 <?php
while($registro=$profesores->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->Identification?></td>
    <td><?php echo $registro->Name?></td>
    <td><?php echo $registro->LastName?></td>
    <td><?php echo $registro->Address?></td>
    <td><?php echo $registro->Phone?></td>
    <td align="center">
        <a href="index2.php?pag=editarProfesor&idTeacher=<?php echo $registro->Identification?>" title="Clic para editar">
        <img src="../Recursos/edit_gen.png" width="15" height="15"/></a>
    </td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>



