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
      
        <center><img id="fondoCreditos" class="fondoPsecundaria" src="../Recursos/cotizacion.jpg" alt="" align="center "width="230" height="180"/> </center>  
        </div>
      </div>
    </header>
	  
<form id="form1" name="form1" method="post" action="../Controlador/validarActualizarCategoria.php">
      		
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
		 	  
        <tr  class="texto">
          <td colspan="2" align="center">ACTUALIZAR CATEGORIA</td>
        </tr>
        
        <tr>
          <td align="right" >Name</td>
          <td><input name="name" type="text" id="name" size="40" required /></td>
        </tr>
        <tr>
            
		  
        <tr class="texto">
          <td colspan="2" align="center" ><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
	<p style="align=center;margin-left: 30%;">*Ingrese el nombre de la Categoria que desea actualizar</p>
   
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Actualizado la Categoria Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Actualizar la Categoria, favor Revisar';
if ($msj==3)
  echo '<p align="center"> No Existe la Categoria con este nombre: '.$name.', favor Revisar';


  ?>

