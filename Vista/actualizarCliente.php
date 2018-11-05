
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> southwool</title>
  <link href="Css/estilos.css" rel="stylesheet">
  </head>
  <body bgcolor="#33FFAC"> 
    <header id="" class="contenedorPortada">

      <div id="" class="portada">
    
        <div id="psecundaria" class="pSecundaria">
      
        <center><img id="fondoCreditos" class="fondoPsecundaria" src="../Recursos/cli.jpg" alt="" align="center "width="230" height="180"/> </center>  
        </div>
      </div>
    </header>

<form id="form1" name="form1" method="post" action="../Controlador/validarActualizarCliente.php">
      <table border="2" align="center" BGCOLOR="#00FFBF">
              <style>
            div label {
                display:block;
                width:25%;
            }
        
            input{
                border:solid 4px rosybrown;
            }
        
       
       </style>
        <tr bgcolor="#00FFBF" class="texto">
	       <br>
	       <br>
	        
          <td colspan="2" align="center">ACTUALIZAR CLIENTE</td>
        </tr>
        
	 <tr>
          <td align="right">Cedula</td>
          <td><input name="cedula" type="text" id="cedula" size="40" required /></td>
        </tr>     
	      
        <tr>
          <td align="right">Nombre</td>
          <td><input name="nombre" type="text" id="nombre" size="40" required /></td>
        </tr>
        <tr>
          <td height="25" align="right">Apellido</td>
          <td><input name="apellido" type="text" id="apellido" size="40" required/></td>
        </tr>
        <tr>
          <td align="right">Direccion</td>
          <td><input name="direccion" type="text" id="direccion" style="width:270px" required/></td>
        </tr>
        <tr>
          <td align="right">Telefono</td>
          <td><input name="telefono " type="text" id="telefono" style="width:270px" required/></td>
        </tr>
        
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center" bgcolor="#00FFBF"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
   <p style="align:center;margin-left: 30%;">*Ingrese la cedula del Cliente que desea actualizar</p>
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Actualizado el Cliente Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Actualizar el Cliente, favor Revisar';
if ($msj==3)
	echo '<p align="center"> No Existe el cliente con está Cedula: '.$cedula.', favor Revisar';

?>

