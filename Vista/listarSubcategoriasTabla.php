<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Subcategoria.php";
$objSubcategoria=new Subcategoria();
$Subcategorias=$objSubcategoria->consultarSubcategorias();
?>
<h1 align="center">LISTADO DE SUBCATEGORIAS</h1>
<table width="70%" border="1" align="center">
  <tr align="center" bgcolor="#00FFBF" class="texto">
    
    <td>idSubcategory_Category</td>
    <td>Name</td>
    
  </tr>
 <?php
while($registro=$Subcategorias->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->idSubcategory_Category?></td>
    <td><?php echo $registro->Name?></td>
   
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>


  



