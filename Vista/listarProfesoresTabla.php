<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Profesor.php";
$objProfesor=new Profesor();
$Profesores=$objProfesor->consultarProfesores();
?>
<h1 align="center">LIST OF TEACHERS</h1>
<table width="70%" border="1" align="center">
  <tr align="center" bgcolor="#00FFBF" class="texto">
    
    <td>Identification</td>
    <td>Name</td>
    <td>LastName</td>
    <td>Address</td>
    <td>Phone</td>
  </tr>
 <?php
while($registro=$Profesores->fetch_object())
{
?>
  <tr>
    
    <td><?php echo $registro->Identification?></td>
    <td><?php echo $registro->Name?></td>
    <td><?php echo $registro->LastName?></td>
    <td><?php echo $registro->Address?></td>
    <td><?php echo $registro->Phone?></td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>







