<?php 

/**
* 
*/
class Empresariocuatro extends Conexion
{
	private $ID_DEUDA,$Numeropuesto,$Tiempodeuda,$Valordeuda;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getID_DEUDA(){
		return $this->ID_DEUDA;
	}
	public function setID_DEUDA($ID_DEUDA) {
		$this->ID_DEUDA = $ID_DEUDA;
	}
	public function getNumeropuesto(){
		return $this->Numeropuesto;
	}
	public function setNumeropuesto($Numeropuesto) {
		$this->Numeropuesto = $Numeropuesto;
	}
	public function getTiempodeuda(){
		return $this->Tiempodeuda;
	}
	public function setTiempodeuda($Tiempodeuda) {
		$this->Tiempodeuda= $Tiempodeuda;
	}
	public function getValordeuda() {
		return $this->Valordeuda;
	}
	public function setValordeuda($Valordeuda) {
		$this->Valordeuda= $Valordeuda;
	}
	public function insertar() {
		try{
			
		$query="INSERT INTO manejodecontrato(ID_DEUDA,Numeropuesto,Tiempodeuda,Valordeuda) VALUES(NULL,'".$this->Numeropuesto."','".$this->Tiempodeuda."','".$this->Valordeuda."')";

		$stmt= $this->model->prepare($query);
		$stmt->execute();
		return true;
	} catch (PDOException $e) {
		return false;
	}
	}
	public function listar() {
		try {
			$query="SELECT * FROM manejodecontrato";
			$stmt= $this->model->prepare($query);
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			return false;
		}
	}
	public function editar() {
		try {
    		$query="UPDATE manejodecontrato SET Numeropuesto='".$this->Numeropuesto."',Tiempodeuda='".$this->Tiempodeuda."',Valordeuda='".$this->Valordeuda."' WHERE ID_DEUDA='".$this->ID_DEUDA."'";
    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
	}
	public function consultar() {
		try {
    	$query= "SELECT * FROM manejodecontrato  WHERE  ID_DEUDA='".$this->ID_DEUDA."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
	}
	public function eliminar(){
		try {
			$query="DELETE FROM manejodecontrato WHERE ID_DEUDA='".$this->ID_DEUDA."'";

			$stmt= $this->model->prepare($query);
			$stmt->execute();

			return true;
		} catch (PDOException $e) {
			return false;
		}
	}
}
?>