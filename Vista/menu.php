<?php 
//session_start();
$rol = $_SESSION['user_rol'];
?>
<ul id="sddm">
	<!-- menu profesores!-->
	 <li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">Teachers</a>
            <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
            <a href="index2.php?pag=insertarProfesor">Add</a>
            <a href="index2.php?pag=listarProfesoresTabla">Consult</a>
            <a href="index2.php?pag=listarProfesoresEditarTabla">Update</a>		
            </div>
	</li>
	
	
	
	<!-- menu estudiantes!-->
	<li>
		<a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Students</a>
		<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
			<a href="index2.php?pag=insertarEstudiante">Add</a>
			<a href="index2.php?pag=listarEstudiantesTabla">Consult</a>
			<a href="index2.php?pag=listarEstudiantesEditarTabla">Update</a>	
		</div>
	</li>
	<!-- menu vocabulario!-->
	<li>
		<a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">Vocabulary</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
         <?php if ($rol == 1):?>
            <a href="index2.php?pag=insertarVocabulario">Add</a>
          
        <?php endif;?>
            <a href="index2.php?pag=listarVocabulariosTabla">Consult</a>
		</div>
	</li>
	<!-- menu diagnostico!-->
	<li>
		<a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">Diagnosis</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="index2.php?pag=insertarDiagnostico">Add</a>
		<a href="index2.php?pag=listarDiagnosticosTabla">Consult</a>
		<a href="index2.php?pag=actualizarDiagnostico">Update</a>	
		</div>
	</li>
	<!-- menu Gramatica!-->
	<li>
		<a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Grammar </a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="index2.php?pag=insertarGramatica">Add</a>
		<a href="index2.php?pag=listarGramaticasTabla">Consult</a>
		<a href="index2.php?pag=actualizarGramatica">Update</a>	
		</div>
	</li>
	<!-- menu Juegos!-->
	<li>
		<a href="#" onmouseover="mopen('m6')" onmouseout="mclosetime()">Games </a>
		<div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="index2.php?pag=insertarJuego">Add</a>
		<a href="index2.php?pag=listarJuegosTabla">Consult</a>
		<a href="index2.php?pag=actualizarJuego">Update</a>	
		</div>
	</li>
	<!-- menu Categorias!-->
	<li>
		<a href="#" onmouseover="mopen('m7')" onmouseout="mclosetime()">Categories </a>
		<div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<?php if ($rol == 1):?>
	        <a href="index2.php?pag=insertarCategoria">Add</a>
	    <?php endif;?>
	        <a href="index2.php?pag=listarCategoriasTabla">Consult</a>
		</div>
	</li>
	
	<!-- menu subCategorias!-->
	<li>
		<a href="#" onmouseover="mopen('m8')" onmouseout="mclosetime()">SubCategories </a>
		<div id="m8" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<?php if ($rol == 1):?>
	        <a href="index2.php?pag=insertarSubcategoria">Add</a>
	    <?php endif;?>
	        <a href="index2.php?pag=listarSubcategoriasTabla">Consult</a>
		</div>
	</li>
	
	
	
	
	
	
	<!-- menu Evaluacion!-->
	<li>
		<a href="#" onmouseover="mopen('m9')" onmouseout="mclosetime()">Evaluation</a>
		<div id="m9" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
			<a href="index2.php?pag=insertarEvaluacion">Add</a>
			<a href="index2.php?pag=listarEvaluacionTabla">Consult</a>
			<a href="index2.php?pag=actualizarEvaluacion">Updates</a>	
		</div>
	</li>
	<!-- menu reportes!-->
	<li><a href="#" onmouseover="mopen('m10')" onmouseout="mclosetime()">Reports </a>
		<div id="m10" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                    <a href="../pdf/gen_profesores.php" target="_blank">Profesores</a>
                    <a href="../pdf/gen_estudiantes.php" target="_blank">Estudiantes</a>	
                    <a href="../pdf/gen_proveedores.php" target="_blank">Vocabulario</a>
                    <a href="../pdf/gen_productos.php" target="_blank">Productos</a>
		<a href="../pdf/gen_cotizaciones.php" target="_blank">Cotizaciones</a>
		</div>
	</li>
        <!-- menu pafuera!-->
	<li>
		<a href="salir.php" onmouseover="mopen('m10')" onmouseout="mclosetime()">Salir</a>		
	</li>
</ul>
