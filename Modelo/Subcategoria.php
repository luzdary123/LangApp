<?php
class Subcategoria
{
	private $idsubcategory_category;
	private $name;
	private $Conexion;
	

	
	
	public function getidSubcategory_Category()
	{
		return ($this->idsubcategory_category);
	}
	
	public function setidSubcategory_Category($idsubcategory_category)
	{
		$this->idsubcategory_category=$idsubcategory_category;
	}
	
	
	public function getName()
	{
		return ($this->name);
	}
	
	
	public function setName($name)
	{
		$this->name=$name;
	}
	
	
	
	
	public function Subcategoria()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearSubcategoria($idsubcategory_category,$name)
	{
		$this->idsubcategory_category=$idsubcategory_category;
                    $this->name=$name;
		
	}
	
	public function agregarSubcategoria()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into subcategories (idSubcategory_Category,Name) values ('$this->idsubcategory_category','$this->name')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	
	}
	
		
		public function actualizarCategoria($idsubcategory_category)
	{
		$this->Conexion=Conectarse();
		$sql="update  subcategories set  idSubcategory_Category='$idsubcategory_category'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	public function modificarSubcategoria()
	{	
		$this->Conexion=Conectarse();
		$sql="update subcategories set idSubcategory_Category='$this->idsubcategory_category'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
	public function consultarSubcategorias()
	{
		$this->Conexion=Conectarse();
		$sql="select * from subcategories";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	public function consultarSubcategoria($idsubcategory_category)
	{
		$this->Conexion=Conectarse();
		$sql="select * from subcategories";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>