<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Estudiante.php";
$objEstudiante=new Estudiante();
$Estudiantes=$objEstudiante->consultarEstudiantes();
?>
<h1 align="center">LIST OF STUDENTS</h1>
<table width="70%" border="1" align="center">
  <tr align="center" bgcolor="#00FFBF" class="texto">
    
    <td>Identification</td>
    <td>Name</td>
    <td>LastName</td>
    <td>Address</td>
    <td>Phone</td>
    <td>Level</td>
  </tr>
 <?php
while($registro=$Estudiantes->fetch_object())
{
?>
  <tr>
    
    <td><?php echo $registro->Identification?></td>
    <td><?php echo $registro->Name?></td>
    <td><?php echo $registro->LastName?></td>
    <td><?php echo $registro->Address?></td>
    <td><?php echo $registro->Phone?></td>
    <td><?php echo $registro->Level?></td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>







