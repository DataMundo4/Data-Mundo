<?php 

/**
* 
*/
class Empresariotres extends Conexion
{
	private $ID_PUESTO,$Costoactual,$Direccion,$Pisopuesto;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getID_PUESTO(){
		return $this->ID_PUESTO;
	}
	public function setID_PUESTO($ID_PUESTO) {
		$this->ID_PUESTO = $ID_PUESTO;
	}
	public function getCostoactual(){
		return $this->Costoactual;
	}
	public function setCostoactual($Costoactual) {
		$this->Costoactual = $Costoactual;
	}
	public function getDireccion(){
		return $this->Direccion;
	}
	public function setDireccion($Direccion) {
		$this->Direccion= $Direccion;
	}
	public function getPisopuesto() {
		return $this->Pisopuesto;
	}
	public function setPisopuesto($Pisopuesto) {
		$this->Pisopuesto= $Pisopuesto;
	}
	public function insertar() {
		try{
			
		$query="INSERT INTO inmuebles(ID_PUESTO,Costoactual,Direccion,Pisopuesto) VALUES(NULL,'".$this->Costoactual."','".$this->Direccion."','".$this->Pisopuesto."')";

		$stmt= $this->model->prepare($query);
		$stmt->execute();
		return true;
	} catch (PDOException $e) {
		return false;
	}
	}
	public function listar() {
		try {
			$query="SELECT * FROM inmuebles";
			$stmt= $this->model->prepare($query);
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			return false;
		}
	}
	public function editar() {
		try {
    		$query="UPDATE inmuebles SET Costoactual='".$this->Costoactual."',Direccion='".$this->Direccion."',Pisopuesto='".$this->Pisopuesto."' WHERE ID_PUESTO='".$this->ID_PUESTO."'";
    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
	}
	public function consultar() {
		try {
    	$query= "SELECT * FROM inmuebles  WHERE  ID_PUESTO='".$this->ID_PUESTO."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
	}
	public function eliminar(){
		try {
			$query="DELETE FROM inmuebles WHERE ID_PUESTO='".$this->ID_PUESTO."'";

			$stmt= $this->model->prepare($query);
			$stmt->execute();

			return true;
		} catch (PDOException $e) {
			return false;
		}
	}
}
?>