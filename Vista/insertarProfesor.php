<div class="izquierda">
  <img src="../Recursos/teacher.jpg"/>
</div>
<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarProfesor.php">
  <table border="2" align="center" BGCOLOR="#00FFBF">
    <tr bgcolor="orange">
      <td colspan="2" align="center" class="label">INSERT TEACHER</td>
    </tr>
          
	  <tr>
      <td width="28%" align="right" class="label">Identification</td>
      <td width="72%">
        <input class="input" name="identification" type="text" id="identification" size="40"  required />
      </td>
    </tr>     
    <tr>
      <td class="label" align="right">Name</td>
      <td>
        <input class="input" name="name" type="text" id="name" size="40" required />
      </td>
    </tr>
    <tr>
      <td class="label" height="25" align="right">LastName</td>
      <td>
        <input class="input" name="lastname" type="text" id="lastname" size="40" required/>
      </td>
    </tr>
    <tr>
      <td class="label" align="right">Address</td>
      <td>
        <input class="input" name="address" type="text" id="address" style="width:270px" required/>
      </td>
    </tr>
    <tr>
      <td class="label" height="25" align="right">Phone</td>
      <td>
        <input class="input" name="phone" type="text" id="phone" size="40" required/>
      </td>
    </tr>
    <tr bgcolor="#33FFE0" class="texto">
      <td colspan="2" align="center" bgcolor="#33FFE0" class="label"><input class="btn" type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Teacher has been added correctly';
if ($msj==2)
	echo '<p align="center">Problems when adding the teacher, please review';

?>