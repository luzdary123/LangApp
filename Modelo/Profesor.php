<?php
class Profesor
{
	private $identification;
	private $name;
	private $lastname;
	private $address;
           private $phone;
	
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
	
	
	function getPhone() 
	{
            return $this->phone;
        }

        function setPhone($phone) 
        {
            $this->phone = $phone;
        }

        	public function Profesor()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearProfesor($identification,$name,$lastname,$address,$phone)
	{
		$this->identification=$identification;
		$this->name=$name;
		$this->lastname=$lastname;
		$this->address=$address;
                    $this->phone=$phone;
				
	}
	
	public function agregarProfesor()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into teachers(Identification,Name,LastName,Address,Phone)
values ('$this->identification','$this->name','$this->lastname','$this->address','$this->phone')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarProfesores()
	{
		$this->Conexion=Conectarse();
		$sql="select * from teachers";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarProfesor($identification)
	{
		$this->Conexion=Conectarse();
		$sql="select * from teachers where Identification='$identification'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
        
        public function guardarEditarProfesor(){
            $this->Conexion=Conectarse();
            $sql="update teachers set Name='".$this->name
                    . "', LastName='".$this->lastname
                    . "', Address='".$this->address
                    . "', Phone='".$this->phone
                    . "' where Identification = '".$this->identification."'";
            $resultado = $sql;
                    $this->Conexion->query($sql);
            return $resultado;
        }
}

?>