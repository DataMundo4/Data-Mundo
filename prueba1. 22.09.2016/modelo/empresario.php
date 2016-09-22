<?php 

/**
* 
*/
class Empresario extends Conexion
{
	private $ID,$Nombre,$Apellido,$Cedula,$Direccion,$Telefono;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getID(){
		return $this->ID;
	}
	public function setID($ID) {
		$this->ID = $ID;
	}
	public function getNombre(){
		return $this->Nombre;
	}
	public function setNombre($Nombre) {
		$this->Nombre= $Nombre;
	}
	public function getApellido() {
		return $this->Apellido;
	}
	public function setApellido($Apellido) {
		$this->Apellido= $Apellido;
	}
	public function getCedula(){
		return $this->Cedula;
	}
	public function setCedula($Cedula){
		$this->Cedula= $Cedula;
	}
	public function getDireccion() {
		return $this->Direccion;
	}
	public function setDireccion($Direccion){
		$this->Direccion= $Direccion;
	}
	public function getTelefono() {
		return $this->Telefono;
	}
	public function setTelefono($Telefono){
		$this->Telefono= $Telefono;
	}
	public function insertar() {
		try{
			
		$query="INSERT INTO contratos(ID,Nombre,Apellido,Cedula,Direccion,Telefono) VALUES(NULL,'".$this->Nombre."','".$this->Apellido."','".$this->Cedula."','".$this->Direccion."','".$this->Telefono."')";

		$stmt= $this->model->prepare($query);
		$stmt->execute();
		return true;
	} catch (PDOException $e) {
		return false;
	}
	}
	public function listar() {
		try {
			$query="SELECT * FROM contratos";
			$stmt= $this->model->prepare($query);
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			return false;
		}
	}
	public function editar() {
		try {
    		$query="UPDATE contratos SET Nombre='".$this->Nombre."',Apellido='".$this->Apellido."',Direccion='".$this->Direccion."',Telefono='".$this->Telefono."' WHERE ID='".$this->ID."'";
    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
	}
	public function consultar() {
		try {
    	$query= "SELECT * FROM contratos  WHERE  ID='".$this->ID."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
	}
	public function eliminar(){
		try {
			$query="DELETE FROM contratos WHERE Cedula='".$this->Cedula."'";

			$stmt= $this->model->prepare($query);
			$stmt->execute();

			return true;
		} catch (PDOException $e) {
			return false;
		}
	}
}
?>