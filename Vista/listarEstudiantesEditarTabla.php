<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Estudiante.php";
$objEstudiante=new Estudiante();
$estudiantes=$objEstudiante->consultarEstudiantes();
?>
<h1 align="center">LISTADO DE ESTUDIANTES</h1>
<table width="100%" border="1" style="border-collapse: collapse">
  <tr  bgcolor="#33FFE0" class="texto" align="center">
    <td>Identification</td>
    <td>Name</td>
    <td>LastName</td>
    <td>Address</td>
    <td>Phone</td>
    <td>Level</td>
    <td>Acciones</td>
  </tr>
 <?php
while($registro=$estudiantes->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->Identification?></td>
    <td><?php echo $registro->Name?></td>
    <td><?php echo $registro->LastName?></td>
    <td><?php echo $registro->Address?></td>
    <td><?php echo $registro->Phone?></td>
     <td><?php echo $registro->Level?></td>
    <td align="center">
        <a href="index2.php?pag=editarEstudiante&idStudent=<?php echo $registro->Identification?>" title="Clic para editar">
        <img src="../Recursos/edit_gen.png" width="15" height="15"/></a>
    </td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>



