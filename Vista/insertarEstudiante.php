<div class="izquierda">
  <img src="../Recursos/est.jpg"/>
</div>

<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarEstudiante.php">
      <table border="2" align="center" BGCOLOR="#00FFBF">
    <tr bgcolor="#33FFE0" class="texto">
          <td colspan="2" align="center" class="label">INSERT STUDENT</td>
        </tr>
          
	  <tr>
          <td class="label" width="28%" align="right" >Identification</td>
          <td width="72%"><label for="id"></label>
          <input class="input" name="identification" type="text" id="identification" size="40"  required /></td>
        </tr>     
	            
        <tr>
          <td class="label" align="right">Name</td>
          <td><input class="input" name="name" type="text" id="name" size="40" required /></td>
        </tr>
        <tr>
          <td class="label" height="25" align="right">LastName</td>
          <td><input class="input" name="lastname" type="text" id="lastname" size="40" required/></td>
        </tr>
        <tr>
          <td class="label" align="right">Address</td>
          <td><input class="input" name="address" type="text" id="address" style="width:270px" required/></td>
        </tr>
        
	<tr>
          <td class="label" height="25" align="right">Phone</td>
          <td><input class="input" name="phone" type="text" id="phone" size="40" required/></td>
        </tr>
	      
	 <tr>
          <td class="label" height="25" align="right">Level</td>
          <td><input class="input" name="level" type="text" id="level" size="40" required/></td>
        </tr>
	      
        <tr bgcolor="#33FFE0" class="texto">
          <td class="label" colspan="2" align="center" bgcolor="#33FFE0"><input class="btn" type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
	
	            
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Student has been added correctly';
if ($msj==2)
	echo '<p align="center">Problems when adding the Student, please review';

?>