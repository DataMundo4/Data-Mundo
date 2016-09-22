<?php 

/**
* 
*/
class Empresariodos extends Conexion
{
	private $Numeropuesto,$Fechainicio,$Fechafin,$Costoarriendos,$ID;
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
	public function getNumeropuesto(){
		return $this->Numeropuesto;
	}
	public function setNumeropuesto($Numeropuesto) {
		$this->Numeropuesto = $Numeropuesto;
	}
	public function getFechainicio(){
		return $this->Fechainicio;
	}
	public function setFechainicio($Fechainicio) {
		$this->Fechainicio= $Fechainicio;
	}
	public function getFechafin() {
		return $this->Fechafin;
	}
	public function setFechafin($Fechafin) {
		$this->Fechafin= $Fechafin;
	}
	public function getCostoarriendo(){
		return $this->Costoarriendo;
	}
	public function setCostoarriendo($Costoarriendo){
		$this->Costoarriendo= $Costoarriendo;
	}
	public function insertar() {
		try{
			
		$query="INSERT INTO arriendos(ID,Numeropuesto,Fechainicio,Fechafin,Costoarriendo) VALUES(NULL,'".$this->Numeropuesto."','".$this->Fechainicio."','".$this->Fechafin."','".$this->Costoarriendo."')";

		$stmt= $this->model->prepare($query);
		$stmt->execute();
		return true;
	} catch (PDOException $e) {
		return false;
	}
	}
	public function listar() {
		try {
			$query="SELECT * FROM arriendos";
			$stmt= $this->model->prepare($query);
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			return false;
		}
	}
	public function editar() {
		try {
    		$query="UPDATE arriendos SET Fechainicio='".$this->Fechainicio."',Fechafin='".$this->Fechafin."',Costoarriendo='".$this->Costoarriendo."' WHERE Numeropuesto='".$this->Numeropuesto."'";
    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
	}
	public function consultar() {
		try {
    	$query= "SELECT * FROM arriendos  WHERE  Numeropuesto='".$this->Numeropuesto."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
	}
	public function eliminar(){
		try {
			$query="DELETE FROM arriendos WHERE Numeropuesto='".$this->Numeropuesto."'";

			$stmt= $this->model->prepare($query);
			$stmt->execute();

			return true;
		} catch (PDOException $e) {
			return false;
		}
	}
}
?>