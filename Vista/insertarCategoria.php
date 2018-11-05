<div class="izquierda">
  <img src="../Recursos/cot.png"/>
</div>
<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarCategoria.php">
  <table border="1" align="center" BGCOLOR="#00FFBF" >
    <tr bgcolor="#33FFE0" class="texto">
      <td colspan="2" align="center" class="label">INSERTAR CATEGORIA</td>
    </tr>
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
	echo '<p align="center" class="success">Se ha Agregado la Categoria Correctamente';
if ($msj==2)
	echo '<p align="center" class="danger"> Problemas al Agregar la Categoria, favor Revisar';


  // aqui va el codigo php
    if(isset($_POST['btn1']))
    {
      include("../Modelo/conexionBasesDatos.php");

      $cotCodigo=$_POST['name'];
      

      $conexion->query("INSERT INTO $categories (name) values ('$name)");

    }
  ?>

<br>
<br>





