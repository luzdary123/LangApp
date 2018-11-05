<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> southwool</title>
  <link href="Css/estilos.css" rel="stylesheet">
  </head>
  <body bgcolor="#D6EAF8"> 
     
	  	    
  <form id="formulario" class="formulario" method="post" action="Controlador/validarInicioSesion.php">
    <div id="login_">
      <img src="Recursos/logolang.jpeg" style="width: 50px;">
    </div>
      <hgroup>
        <center><h1>welcome to LangApp</h1></center>
      </hgroup>

      <table width="31%" border="2" align="center">
        <tr bgcolor="#FF5733">
          <td colspan="2" align="center" bgcolor="#FF5733" class="texto" >LOGIN</td>
        </tr>
        <tr>
          <td class="label" width="39%" align="right">USER</td>
          <td width="61%"><label for="login"></label>
          <input class="input" name="login" type="text" id="login" size="40" required/></td>
        </tr>
        <tr>
          <td class="label" width="39%" align="right">PASSWORD</td>
          <td><label for="password"></label>
          <input class="input" name="pass" type="password" id="pass" size="40" required/></td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#1ABC9C" id="bt"><input type="submit" name="button" id="button" class="btn" value="Enviar" /></td>
        </tr>
      </table>
  </form>
<?php

if ($x==1)
	echo "<br><p align='center' class='danger'> Unregistered user with the entered data, try again";
if ($x==2)
	echo "<br><p align='center' class='danger'> You must Login to be able to access the Application";
if ($x==3)
	echo "<br><p  align='center' class='success'> The User has closed the Session";
?>