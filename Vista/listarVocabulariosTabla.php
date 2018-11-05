<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Vocabulario.php";
$objVocabulario=new Vocabulario();
$Vocabularios=$objVocabulario->consultarVocabularios();
?>
<h1 align="center">LIST OF VOCABULARY</h1>
<table width="70%" border="1" align="center">
  <tr align="center" bgcolor="#00FFBF" class="texto">
    
   <td>image</td>
    <td>name</td>
    <td>description</td>
    <td>example</td>
   
  </tr>
 <?php
while($registro=$Vocabularios->fetch_object())
{
?>
  <tr>
    
    <td><?php echo $registro->image?></td>
    <td><?php echo $registro->name?></td>
    <td><?php echo $registro->description?></td>
    <td><?php echo $registro->example?></td>
    
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>









  
