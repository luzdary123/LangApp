<?php
class Categoria
{
	
	private $name;
	private $Conexion;
	

	
	
	public function setName($name)
	{
		$this->name=$name;
	}
	
	public function getName()
	{
		return ($this->name);
	}
	
	
	
	public function Categoria()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearCategoria($name)
	{
		
	
		$this->name=$name;
		
	}
	
	public function agregarCategoria()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into categories (Name) values ('$this->name')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	
	}
	
		
		public function actualizarCategoria($name)
	{
		$this->Conexion=Conectarse();
		$sql="update  categories set  Name='$name'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	public function modificarCategoria()
	{	
		$this->Conexion=Conectarse();
		$sql="update categories set Name='$this->name'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
	public function consultarCategorias()
	{
		$this->Conexion=Conectarse();
		$sql="select * from categories";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	public function consultarCategoria()
	{
		$this->Conexion=Conectarse();
		$sql="select * from categories";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>