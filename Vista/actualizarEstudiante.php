<div class="izquierda">
  <img src="../Recursos/estud.jpg"/>
</div>

<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Estudiante.php";


$objEstudiante=new Estudiante();
$estudiantes=$objEstudiante->consultarEstudiante($_REQUEST['idStudent']);
$estudiante = $estudiantes->fetch_object();
?>

<form id="form1" name="form1" method="post" action="../Controlador/validarActualizarEstudiante.php">
      <table border="2" align="center" BGCOLOR="#00FFBF">
        <tr bgcolor="#00FFBF" class="texto">
	       <br>
	       <br>
	        
          <td colspan="2" align="center" class="label">UPDATE STUDENT</td>
        </tr>
        
	 <tr>
          <td class="label" align="right">Identification</td>
          <td><input class="input" name="identification" type="text" id="identification" size="40" required />
	 value="<?php echo $estudiante->identification; ?>" readonly="readonly" /></td>
        </tr>     
	      
        <tr>
          <td class="label" align="right">Name</td>
          <td><input class="input" name="name" type="text" id="name" size="40" required />
	        value="<?php echo $estudiante->Name ?>"/></td>
	        
        </tr>
	      
        <tr>
          <td class="label" height="25" align="right">LastName</td>
          <td><input class="input" name="lastname" type="text" id="lastname" size="40" required/>
	 value="<?php echo $estudiante->LastName ?>"/></td>
	        
        </tr>
        <tr>
          <td class="label" align="right">Address</td>
          <td><input class="input" name="address" type="text" id="address" style="width:270px" required/>
		 value="<?php echo $estudiante->Address ?>"/></td>
	        
        </tr>
        <tr>
          <td class="label" align="right">Phone</td>
          <td><input class="input" name="phone " type="text" id="phone" style="width:270px" required/>
		 value="<?php echo $estudiante->Phone ?>"/></td>
	        
        </tr>
        
	 <tr>
          <td class="label" align="right">Level</td>
          <td><input class="input" name="level" type="text" id="level" style="width:270px" required/></td>
        </tr>     
	      
	      
        <tr bgcolor="#cc0000" class="texto">
          <td class="label" colspan="2" align="center" bgcolor="#00FFBF">
            <input class="btn" type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
   <p style="align:center;margin-left: 30%;">*Enter the Student identification you want to update</p>
    <?php
if ($msj==1)
	echo '<p align="center" class="success" >The Student has been Updated Correctly';
if ($msj==2)
	echo '<p align="center" class="danger"> Problems when updating the Student, please review';
if ($msj==3)
	echo '<p align="center" class="danger"> There is no Student with this identification: <strong class="success">'.$identification.'</strong>, please check';

?>

