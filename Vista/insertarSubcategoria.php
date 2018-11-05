<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Categoria.php";
$objCategoria=new Categoria();
$Categorias=$objCategoria->consultarCategorias();
?>



<div class="izquierda">
	<img src="../Recursos/cot.png"/>
</div>
<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarSubcategoria.php">
  <table border="1" align="center" BGCOLOR="#00FFBF" >
    <tr bgcolor="#33FFE0" class="texto">
      <td colspan="2" align="center" class="label">INSERTAR SUBCATEGORIA</td>
    </tr>
        <tr>
       <td class="label" width="28%" align="right" >idSubcategory_Category</td>
       <td width="72%" size="40" ><label for="idsubcategory_category"></label>
         
	        <select name="idsubcategory_category" >
	       <option value="0">Seleccione una opcion</option>
		<?php       
		        
                 while($registro=$Categorias->fetch_object()){ echo "<option value=".$registro->idCategory.">".$registro->Name."</option>";
		
   
}
  ?>
	       
</select>    
        </tr>
	  
	 <br> 
    <tr>
       <td class="label" width="28%" align="right" >Name</td>
          <td width="72%"><label for="id"></label>
          <input class="input" name="name" type="text" id="name" size="40"  required /></td>
        </tr>

          
	      
        <tr bgcolor="#cc0000" class="texto">
          <td class="label" colspan="2" align="center" bgcolor="#33FFE0"><input class="btn" type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
	         
      </table>
    </form>      

	     
<?php
if ($msj==1)
	echo '<p align="center" class="success">Se ha Agregado la Subcategoria Correctamente';
if ($msj==2)
	echo '<p align="center" class="danger"> Problemas al Agregar la Subcategoria, favor Revisar';



          
	      
       

  // aqui va el codigo php
    if(isset($_POST['btn1']))
    {
      include("../Modelo/conexionBasesDatos.php");

      $cotCodigo=$_POST['idsubcategory_category,name'];
      

      $conexion->query("INSERT INTO $subcategories (idsubcategory_category,name) values ('$idsubcategory_category,$name)");

    }
  ?>

<br>
<br>





