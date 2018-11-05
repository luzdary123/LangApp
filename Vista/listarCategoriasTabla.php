<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Categoria.php";
$objCategoria=new Categoria();
$Categorias=$objCategoria->consultarCategorias();
?>
<h1 align="center">LISTADO DE CATEGORIAS</h1>
<table width="70%" border="1" align="center">
  <tr align="center" bgcolor="#00FFBF" class="texto">
    
    <td>Name</td>
    
  </tr>
 <?php
while($registro=$Categorias->fetch_object())
{
?>
  <tr>
   
    <td><?php echo $registro->Name?></td>
   
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>


  



