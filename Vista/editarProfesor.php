<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Profesor.php";

$objProfesor=new Profesor();
$profesores=$objProfesor->consultarProfesor($_REQUEST['idTeacher']);
$profesor = $profesores->fetch_object();
?>



<form id="form1" name="form1" method="post" action="../Controlador/validarEditarProfesor.php">
   <table border="2" align="center" BGCOLOR="#00FFBF">
        <tr bgcolor="#00FFBF" class="texto">
        <td colspan="2" align="center">UPDATE TEACHER</td>
      </tr>
      <tr>
        <td width="28%" align="right" >Identification</td>
        <td width="72%"><label for="identification"></label>
        <input name="identification" type="text" id="identification" size="40"  required 
               value="<?php echo $profesor->Identification; ?>" readonly="readonly" /></td>
      </tr>
      <tr>
        <td align="right" >Name</td>
        <td><input name="name" type="text" id="name" size="40" required 
                   value="<?php echo $profesor->Name ?>"/></td>
      </tr>
      <tr>
        <td height="25" align="right" >Lastname</td>
        <td><input name="lastname" type="text" id="lastname" size="40" required
                   value="<?php echo $profesor->LastName?>"/></td>
      </tr>
      <tr>
        <td height="25" align="right" >Address</td>
        <td><input name="address" type="text" id="address" size="40" required
                   value="<?php echo $profesor->Address?>"/></td>
      </tr>
      <tr>
        <td height="25" align="right" >Phone</td>
        <td><input name="phone" type="tel" id="phone" size="40" required
                   value="<?php echo $profesor->Phone?>"/></td>
      </tr>
      
      <tr bgcolor="#cc0000" class="texto">
        <td colspan="2" align="center" bgcolor="#00FFBF">
            <input class="btn-form" type="submit" name="button" id="button" value="Enviar" />
        </td>
      </tr>
    </table>
  </form>


<?php
    if ($msj==1)
            echo '<p align="center" >The Teacher has been Updated Correctly';
    if ($msj==2)
            echo '<p align="center"> Problems when updating the Teacher, please review';
?>
