<?php

	require_once 'dbconfig.php';
	
	if(isset($_GET['delete_id']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT image FROM vocabulary1 WHERE id_vocabulary =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("user_images/".$imgRow['image']);
		
		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM vocabulary1 WHERE id_vocabulary =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: index.php");
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes" />
<title>Subir, Insertar, Actualizar, Borrar una imágen usando PHP y MySQL</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<script src="bootstrap/js/jquery.min.js"></script>
</head>

<body>



<div class="container">

	<div class="page-header">
    	<h1 class="h2">todos los listados de vocabulario. / <a class="btn btn-default" href="addnew.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; agregar nuevo</a></h1> 
    </div>
    
<br />

<div class="row">
<?php
	
	$stmt = $DB_con->prepare('SELECT id_vocabulary, name, description,example,image FROM vocabulary1  ORDER BY id_vocabulary DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<div class="col-xs-3">
				<p class="page-header"><?php echo $name."&nbsp;/&nbsp;".$description."&nbsp;/&nbsp;".$example; ?></p>
				<img src="user_images/<?php echo $row['image']; ?>" class="img-rounded" width="250px" height="250px" />
				<p class="page-header">
				<span>
				<a class="btn btn-info" href="editform.php?edit_id=<?php echo $row['id_vocabulary']; ?>" title="click for edit" onclick="return confirm('va a editar, esta seguro ?')"><span class="glyphicon glyphicon-edit"></span> Editar</a> 
				<a class="btn btn-danger" href="?delete_id=<?php echo $row['id_vocabulary']; ?>" title="click for delete" onclick="return confirm('va a borrar, esta seguro ?')"><span class="glyphicon glyphicon-remove-circle"></span> Borrar</a>
				</span>
				</p>
			</div>       
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ...
            </div>
        </div>
        <?php
	}
	
?>
</div>	




