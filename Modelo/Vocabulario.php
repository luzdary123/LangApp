<?php
class Vocabulario
{
	
	private $id_vocabulary;
	private $image;
	private $name;
	private $description;
	private $example;
	private $Conexion;
	

	
	public function setid_vocabulary($id_vocabulary)
	{
		$this->id_vocabulary=$id_vocabulary;
	}
	
	public function getid_vocabulary()
	{
		return ($this->id_vocabulary);
	}
	
	
	public function setimage($image)
	{
		$this->image=$image;
	}
	
	public function getimage()
	{
		return ($this->image);
	}
	public function setName($name)
	{
		$this->name=$name;
	}
	
	public function getName()
	{
		return ($this->name);
	}
	
	
	public function setdescription($description)
	{
		$this->description=$description;
	}
	
	public function getdescription()
	{
		return ($this->description);
	}
	
	public function setexample($example)
	{
		$this->example=$example;
	}
	
	public function getexample()
	{
		return ($this->example);
	}
	
	
	
	public function Vocabulario()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearVocabulario($id_vocabulary,$image,$name,$description,$example)
	{
		
		$this->id_vocabulary=$id_vocabulary;
		$this->image=$image;
		$this->name=$name;
		$this->description=$description;
		$this->example=$example;
	}
	
	public function agregarVocabulario()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into vocabulary1(id_vocabulary,image,name,description,example)
		values ('$this->id_vocabulary','$this->image','$this->name','$this->description','$this->example')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	
	}
	
		
		public function actualiza($id_vocabulary,$image,$name,$description,$example)
	{
		$this->Conexion=Conectarse();
		$sql="update  vocabulary1 set image='$image',name='$name',description='$description',example='$example' WHERE id_vocabulary ='$id_vocabulary'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	public function modificarVocabulario()
	{	
		$this->Conexion=Conectarse();
		$sql="update vocabulary1 set image='$this->image',name='$this->name',Description='$this->desccription',example='$this->example'' where id_vocabulary='$this->id_vocabulary'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
	public function consultarVocabularios()
	{
		$this->Conexion=Conectarse();
		$sql="select * from vocabulary1";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	public function consultarEstudiante($id_vocabulary)
	{
		$this->Conexion=Conectarse();
		$sql="select * from vocabulary1 where id_vocabulary='$id_vocabulary'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>