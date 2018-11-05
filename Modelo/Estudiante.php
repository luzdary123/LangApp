<?php
class Estudiante
{
	
	private $identification;
	private $name;
	private $lastname;
	private $address;
	private $phone;
	private $level;
	private $Conexion;
	

	
	public function setIdentification($identification)
	{
		$this->identification=$identification;
	}
	
	public function getIdentification()
	{
		return ($this->identification);
	}
	
	public function setName($name)
	{
		$this->name=$name;
	}
	
	public function getName()
	{
		return ($this->name);
	}
	
	public function setLastName($lastname)
	{
		$this->lastname=$lastname;
	}
	
	public function getLastName()
	{
		return ($this->lastname);
	}
	
	public function setAddress($address)
	{
		$this->address=$address;
	}
	
	public function getAddress()
	{
		return ($this->address);
	}
	
	public function setPhone($phone)
	{
		$this->phone=$phone;
	}
	
	public function getPhone()
	{
		return ($this->phone);
	}
	
	public function setLevel($level)
	{
		$this->level=$level;
	}
	
	public function getLevel()
	{
		return ($this->level);
	}
	
	
	public function Estudiante()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearEstudiante($identification,$name,$lastname,$address,$phone,$level)
	{
		
		$this->identification=$identification;
		$this->name=$name;
		$this->lastname=$lastname;
		$this->address=$address;
		$this->phone=$phone;
		$this->level=$level;
	}
	
	public function agregarEstudiante()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into students(Identification,Name,LastName,Address,Phone,Level)
		values ('$this->identification','$this->name','$this->lastname','$this->address','$this->phone','$this->level')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	
	}
	
	
	
	public function consultarEstudiantes()
	{
		$this->Conexion=Conectarse();
		$sql="select * from students";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarEstudiante($identification)
	{
		$this->Conexion=Conectarse();
		$sql="select * from students where Identification='$identification'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	
	
	  public function guardarEditarEstudiante(){
            $this->Conexion=Conectarse();
            $sql="update students set Name='".$this->name
                    . "', LastName='".$this->lastname
                    . "', Address='".$this->address
                    . "', Phone='".$this->phone
		. "', Level='".$this->level
                    . "' where Identification = '".$this->identification."'";
            $resultado = $sql;
                    $this->Conexion->query($sql);
            return $resultado;
             }
}

?>
